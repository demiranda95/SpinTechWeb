//Captura de Nodos DOM
let displayEquipment = document.getElementById('displayEquipment')
let searchInput = document.getElementById('search')
let displaySearchedEquipment = document.getElementById('displaySearchedEquipment')
let displayEquipmentTab = document.getElementById('displayEquipmentTab')

// Class Constructor for products
class Equipment {
	constructor(id, tabTitle, title, category, img, tabs) {
		this.id = id
		this.tabTitle = tabTitle
		this.title = title
		this.category = category
		this.img = img
		this.tabs = tabs
	}
}

let catalog = []

const loadCatalog = async (categoryId) => {
	try {
		const response = await fetch('../data/equipment.json')
		const data = await response.json()
		const equipmentData = data.equipment

		// Filtrar los productos por categoryId
		const filteredEquipment = equipmentData.filter((item) => item.categoryId === categoryId)

		for (const item of filteredEquipment) {
			const newEquipment = new Equipment(item.id, item.tabTitle, item.title, item.category, item.img, item.tabs)
			catalog.push(newEquipment)
		}
		// Ahora llamamos a las funciones de visualización después de cargar los datos
		showEquipment(catalog)
		displayEquipment.innerHTML = `<div style="height: 40vh" class="d-flex justify-content-start align-items-center">
		<p style="font-size: 4rem"><i class="fa-solid fa-arrow-left"></i>   Selecciona un Equipo</p>
		</div>`
	} catch (error) {
		console.error('Error cargando catálogo:', error.message)
	}
	console.log(catalog)
}

function initializeCatalog() {
	loadCatalog()
}

// ... (resto del código)

function getCategories(array) {
	return array.map((item) => item.category)
}

function showEquipment(array) {
	let counter = array.reduce((counter, item) => {
		if (!counter[item.tabTitle]) {
			counter[item.tabTitle] = 0
		}
		counter[item.tabTitle]++
		return counter
	}, {})

	for (let item in counter) {
		let newTab = document.createElement('button')
		newTab.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center')
		newTab.setAttribute(`id`, `filter${item}`)
		newTab.innerHTML = `${item}`
		displayEquipmentTab.appendChild(newTab)

		let filter = document.getElementById(`filter${item}`)
		filter.addEventListener('click', () => {
			// Remove the active class from all buttons
			const allTabs = document.querySelectorAll('#displayEquipmentTab button')
			allTabs.forEach((tab) => tab.classList.remove('active'))

			// Add the active class to the clicked tab
			filter.classList.add('active')

			const filteredEquipment = showSelectedEquipment(item)
			showCatalog(filteredEquipment)
		})
	}
}

function showSelectedEquipment(tabTitle) {
	return catalog.filter((item) => item.tabTitle === tabTitle)
}

function showCatalog(array) {
	displayEquipment.innerHTML = ``

	for (let item of array) {
		const newEquipment = document.createElement('div')
		newEquipment.classList.add('my-3', 'd-flex', 'flex-column', 'justify-content-center')
		newEquipment.id = item.id
		newEquipment.innerHTML = `
				<div class="card-body d-flex flex-column justify-content-center align-items-center mb-5">
					<h2 class="card-title">${item.title}</h2>
					<h5>${item.category}</h5>
					<img class="card-img-top img-fluid" style="max-width: 1000px" src="${item.img}" alt="${item.title}">
				</div>
				<div class="card-body">
					<ul id="tabs" class="nav nav-tabs"></ul>
					<div id="tabsContent" class="card-body py-3"></div>
				</div>
		`

		displayEquipment.appendChild(newEquipment)

		const tabs = document.getElementById('tabs')
		tabs.innerHTML = ''

		const tabsContent = document.getElementById('tabsContent')
		tabsContent.innerHTML = '' // Limpiamos el contenido previo

		for (let tab of item.tabs) {
			const tabElement = document.createElement('li')
			tabElement.classList.add('nav-item')
			const tabAnchor = document.createElement('a')
			tabAnchor.classList.add('nav-link')
			tabAnchor.href = '#' + tab.anchor
			tabAnchor.textContent = tab.title
			tabElement.appendChild(tabAnchor)
			tabElement.addEventListener('click', handleTabClick)
			tabs.appendChild(tabElement)

			const content = document.createElement('div')
			content.id = tab.anchor
			content.classList.add('tab-content', 'container-fluid') // Puedes agregar clases para estilos
			// Mostramos el contenido según el tipo de pestaña
			if (tab.type === 'text') {
				content.innerHTML = `<p style="text-align: justify">${tab.content}</p>`
			} else if (tab.type === 'table') {
				content.innerHTML = `<table class="table table-striped">
								<tr><th>Descripción</th><th>Valor</th></tr>
								${tab.content.table.map((row) => `<tr><th>${row.name}</th><td>${Array.isArray(row.value) ? row.value.join(', ') : row.value}</td></tr>`).join('')}
							  </table>`
			} else if (tab.type === 'documents') {
				content.classList.add('gallery') // Puedes agregar clases para estilos
				content.innerHTML = `<div class="row">
								${tab.content
									.map((item) => {
										return `
										<div class="col">
										<a class="documents" href="${item.url}"><h3>${item.header} <i class="fa-solid fa-file-arrow-down"></i></h3></a>
										</div>`
									})
									.join('')}
							  </div>`
			} else if (tab.type === 'gallery') {
				content.classList.add('gallery') // Puedes agregar clases para estilos
				content.innerHTML = `<div class="row">
								${tab.content
									.map((item) => {
										return `
											<div class="col">
												<h3>${item.header}</h3>
												<p>${item.text}</p>
												<img src="${item.img}" alt="${item.header}">
											</div>`
									})
									.join('')}
							  </div>`
			}
			tabsContent.appendChild(content)
		}
		// Ocultamos todo el contenido de las pestañas excepto el primero (si hay al menos uno)
		const firstTabContent = tabsContent.querySelector('.tab-content')
		if (firstTabContent) {
			const tabContents = tabsContent.querySelectorAll('.tab-content')
			for (const content of tabContents) {
				content.style.display = 'none'
			}
			firstTabContent.style.display = 'block'
		}
	}

	function handleTabClick(event) {
		event.preventDefault()
		const selectedTab = event.currentTarget
		const tabAnchor = selectedTab.querySelector('a') // Accedemos al elemento 'a' dentro del 'li'
		const anchor = tabAnchor.getAttribute('href')
		if (anchor) {
			const anchorId = anchor.substring(1)
			const tabContents = tabsContent.querySelectorAll('.tab-content')
			for (const content of tabContents) {
				content.style.display = 'none'
			}
			document.getElementById(anchorId).style.display = 'block'
		}
	}
}

// Buscador de productos por tabTitle
function searchEquipment(search, array) {
	let searchArray = array.filter((item) => item.title.toLowerCase().includes(search.toLowerCase()) || item.tabTitle.toLowerCase().includes(search.toLowerCase()))

	//condicional sino encuentra nada:
	if (searchArray.length === 0) {
		displaySearchedEquipment.innerHTML = `
		<div class="centered-message">
			<h3>No tenemos el producto que buscas...</h3>
		</div>
		`
	} else {
		displaySearchedEquipment.innerHTML = ''
	}
	showCatalog(searchArray)
}

searchInput.addEventListener('input', () => {
	const searchText = searchInput.value
	searchEquipment(searchText, catalog)
})

//EVENTOS:
let categories = getCategories(catalog)

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('index.html')) {
		initializeCatalog()
	}
})

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('underground.html')) {
		loadCatalog('underground') // Cargar equipos con categoryId "underground"
	}
})

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('processing.html')) {
		loadCatalog('processing') // Cargar equipos con categoryId "processing"
	}
})
