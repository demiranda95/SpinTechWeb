// Captura de Nodos DOM
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
		const response = await fetch(`../data/data.php?category=${categoryId}`)
		const equipmentData = await response.json()

		for (const item of equipmentData) {
			const newEquipment = new Equipment(
				item.id,
				item.tabTitle,
				item.title,
				item.category,
				item.img,
				item.tabs // Ajusta esta línea según la nueva estructura
			)
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

	console.log(item.tabs)
}

function initializeCatalog() {
	loadCatalog()
}

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
	const displayEquipment = document.getElementById('displayEquipment')
	displayEquipment.innerHTML = ''
	console.log(array)

	for (let item of array) {
		const newEquipment = document.createElement('div')
		newEquipment.classList.add('my-3', 'd-flex', 'flex-column', 'justify-content-center')
		newEquipment.id = item.id
		newEquipment.innerHTML = `
		<div class="card-body d-flex flex-column justify-content-center align-items-center mb-5">
		  <h2 class="card-title">${item.title}</h2>
		  <h5>${item.category || ''}</h5>
		  <img class="card-img-top img-fluid" style="max-width: 1000px" src="${item.img || ''}" alt="${item.title || ''}">
		</div>
		<div class="card-body">
		  <ul id="tabs" class="nav nav-tabs"></ul>
		  <div id="tabsContent" class="tab-content container-fluid py-3"></div>
		</div>
	  `

		displayEquipment.appendChild(newEquipment)

		const tabs = newEquipment.querySelector('#tabs')
		const tabsContent = newEquipment.querySelector('#tabsContent')
		// Convertir la cadena JSON de item.tabs a un array de objetos
		const tabsArray = JSON.parse(item.tabs)

		// Ahora 'tabsArray' es un array de objetos que puedes utilizar en tu código
		console.log(tabsArray)

		for (let tab of tabsArray) {
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
			content.classList.add('tab-pane', 'fade') // Añadir 'fade' para efecto de transición
			tabsContent.appendChild(content)

			// Mostrar el contenido según el tipo de pestaña
			if (tab.type === 'text') {
				content.innerHTML = `<p style="text-align: justify">${tab.content}</p>`
			} else if (tab.type === 'table') {
				content.innerHTML = `
			<table class="table table-striped">
			  <tr><th>Descripción</th><th>Valor</th></tr>
			  ${tab.content.table.map((row) => `<tr><th>${row.name}</th><td>${Array.isArray(row.value) ? row.value.join(', ') : row.value}</td></tr>`).join('')}
			</table>`
			} else if (tab.type === 'documents') {
				content.classList.add('gallery')
				content.innerHTML = `<div class="row">
			${tab.content
				.map(
					(item) => `
				  <div class="col">
					<a class="documents" href="${item.url}">
					  <h3>${item.header} <i class="fa-solid fa-file-arrow-down"></i></h3>
					</a>
				  </div>`
				)
				.join('')}
		  </div>`
			} else if (tab.type === 'gallery') {
				content.classList.add('gallery')
				content.innerHTML = `<div class="row">
			${tab.content
				.map(
					(item) => `
				  <div class="col">
					<h3>${item.header}</h3>
					<p>${item.text}</p>
					<img src="${item.img}" alt="${item.header}">
				  </div>`
				)
				.join('')}
		  </div>`
			}
		}

		// Asegurarse de que el primer contenido de la pestaña esté visible
		const firstTabContent = tabsContent.querySelector('.tab-pane')
		if (firstTabContent) {
			firstTabContent.classList.add('show', 'active')
		}
	}

	function handleTabClick(event) {
		event.preventDefault()
		const selectedTab = event.currentTarget
		const tabAnchor = selectedTab.querySelector('a')
		const anchor = tabAnchor.getAttribute('href').substring(1)

		const tabsContent = selectedTab.closest('.card-body').querySelector('#tabsContent')
		const tabContents = tabsContent.querySelectorAll('.tab-pane')
		for (const content of tabContents) {
			content.classList.remove('show', 'active')
		}

		document.getElementById(anchor).classList.add('show', 'active')
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

///EVENTOS:
let categories = getCategories(catalog)

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('index.php')) {
		initializeCatalog()
	}
})

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('underground.php')) {
		loadCatalog('underground') // Cargar equipos con categoryId "underground"
	}
})

document.addEventListener('DOMContentLoaded', () => {
	if (document.URL.includes('processing.php')) {
		loadCatalog('processing') // Cargar equipos con categoryId "processing"
	}
})
