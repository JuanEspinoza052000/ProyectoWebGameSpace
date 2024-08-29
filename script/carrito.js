// Variables para almacenar el carrito y el total
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
let items = []; // Puedes usar un array para almacenar los productos del carrito

// Función para agregar un producto al carrito
function addToCart(product) {
    items.push(product);
    updateCart();
}

// Función para eliminar un producto del carrito
function removeFromCart(index) {
    items.splice(index, 1);
    updateCart();
}

// Función para actualizar el carrito
function updateCart() {
    cartItems.innerHTML = '';
    let total = 0;

    items.forEach((item, index) => {
        const li = document.createElement('li');
        li.innerHTML = `
            ${item.name} - $${item.price} 
            <button class="remove-item" onclick="removeFromCart(${index})">Eliminar</button>
        `;
        cartItems.appendChild(li);
        total += item.price;
    });

    cartTotal.textContent = total.toFixed(2);
}

// Ejemplo de uso: agregar un producto al carrito
document.querySelectorAll('.card button').forEach(button => {
    button.addEventListener('click', () => {
        const card = button.closest('.card');
        const productName = card.querySelector('h3').textContent;
        const productPrice = parseFloat(card.querySelector('h3').nextElementSibling?.textContent.replace('$', '') || '0');
        addToCart({ name: productName, price: productPrice });
    });
});