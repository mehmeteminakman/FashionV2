$(document).ready(function () {
    const addedItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const btnCard = $(".btn-card");
    const cardlist = $(".shopping-cart-list");
    const totalPriceElement = $(".totalYaz");
    let totalAmount = 0;

    class Shopping {
        constructor(image, title, price) {
            this.image = image;
            this.title = title;
            this.price = price;
            this.quantity = 1;
        }
    }

    class UI {
        addToCart(shopping) {
            const listItem = document.createElement("div");
            listItem.classList.add("list-item");

            listItem.innerHTML = `
                <div class="row align-items-center text-white">
                    <div class="col-md-3">
                        <img src="${shopping.image}" alt="product" class="img-fluid">
                    </div>
                    <div class="col-md-5">
                        <div class="title">${shopping.title}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="price">${shopping.price} $</div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-delete">
                            <i class="fas fa-trash-alt text-light"></i>
                        </button>
                    </div>
                </div>
            `;

            cardlist.append(listItem);
        }

        removeCard() {
            $(document).on("click", ".btn-delete", function () {
                const listItem = $(this).closest(".list-item");
                const title = listItem.find(".title").text();
                const item = addedItems.find(item => item.title === title);
                if (item) {
                    totalAmount -= item.price * item.quantity;
                    addedItems.splice(addedItems.indexOf(item), 1);
                    ui.updateTotalPrice();
                    ui.updateLocalStorage();
                }
                listItem.remove();
                ui.cardCount();
            });
        }

        cardCount() {
            const itemCount = cardlist.find(".list-item").length;
            $("#item-count").text(itemCount);
        }

        cardToggle() {
            btnCard.on("click", function () {
                cardlist.toggleClass("d-none");
            });
        }

        updateTotalPrice() {
            totalPriceElement.text(totalAmount);
        }

        updateLocalStorage() {
            localStorage.setItem('cartItems', JSON.stringify(addedItems));
        }

        initializeCart() {
            addedItems.forEach(item => {
                totalAmount += item.price * item.quantity;
                this.addToCart(item);
            });
            this.updateTotalPrice();
            this.cardCount();
        }
    }

    const ui = new UI();
    ui.cardToggle();
    ui.removeCard();
    ui.initializeCart();

    $(".btnAdd").on("click", function () {
        event.preventDefault();
        const price = parseInt($(this).attr("price"));
        const title = $(this).attr("name");
        const image = $(this).attr("res");

        const existingItem = addedItems.find(item => item.title === title);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            const shopping = new Shopping(image, title, price);
            addedItems.push(shopping);
            ui.addToCart(shopping);
        }

        totalAmount += price;
        ui.cardCount();
        ui.updateTotalPrice();
        ui.updateLocalStorage();
    });
});
