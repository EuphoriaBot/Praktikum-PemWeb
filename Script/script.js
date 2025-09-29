console.log("tes kepanggil");

const addToCartButtons = document.querySelectorAll(".product-overlay button");
const notification = document.getElementById("cart-notification");

addToCartButtons.forEach(button => {
    button.addEventListener("click", () => {
        const productName = button.closest(".product-card").querySelector("h4").textContent;

        notification.textContent = `${productName} berhasil ditambahkan ke keranjang`;

        notification.classList.add("show");

        setTimeout(() => {
            notification.classList.remove("show");
        }, 3000);
    });
});

const subscribeForm = document.querySelector(".subscribe-form");
const emailInput = subscribeForm.querySelector("input[type='email']");
const bookDemoBtn = document.querySelector(".book-demo");

subscribeForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = emailInput.value.trim();
    if (email === "") {
        alert("Masukkan email terlebih dahulu");
    } else {
        alert(`Terima kasih sudah subscribe: ${email}`);
        emailInput.value = "";
    }
});

bookDemoBtn.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Book Demo berhasil, tim kami akan segera menghubungi Anda");
});