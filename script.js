document.addEventListener('DOMContentLoaded', function() {
    const products = [
        {
            id: 1,
            name: 'Perfume 1',
            image: 'perfume1.jpg',
            description: 'A wonderful fragrance.',
            price: '$50'
        },
        {
            id: 2,
            name: 'Perfume 2',
            image: 'perfume2.jpg',
            description: 'A delightful scent.',
            price: '$60'
        },
        {
            id: 3,
            name: 'Perfume 3',
            image: 'perfume3.jpg',
            description: 'A captivating aroma.',
            price: '$70'
        }
    ];

    const productList = document.getElementById('product-list');

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');
        productElement.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>${product.price}</p>
            <button>Add to Cart</button>
        `;
        productList.appendChild(productElement);
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const perfumes = [
        {
            name: "Perfume 1",
            image: "path/to/perfume1.jpg",
            description: "A delightful fragrance with notes of citrus and jasmine."
        },
        {
            name: "Perfume 2",
            image: "path/to/perfume2.jpg",
            description: "An enchanting blend of rose and vanilla."
        }
        // Add more perfumes as needed
    ];

    const perfumeContainer = document.getElementById('perfumeContainer');

    perfumes.forEach(perfume => {
        const perfumeItem = document.createElement('div');
        perfumeItem.classList.add('perfume-item');

        perfumeItem.innerHTML = `
            <img src="${perfume.image}" alt="${perfume.name}">
            <h3>${perfume.name}</h3>
            <p class="description">${perfume.description}</p>
        `;

        perfumeContainer.appendChild(perfumeItem);
    });
});