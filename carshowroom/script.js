document.addEventListener("DOMContentLoaded", function () {
    let showFormBtn = document.getElementById("showFormBtn");
    let popup = document.getElementById("popupContainer");
    let closeBtn = document.querySelector(".close-btn");

    // Show Popup when button is clicked
    showFormBtn.addEventListener("click", function () {
        popup.style.display = "flex";
    });

    // Hide Popup when close button is clicked
    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });

    // Hide popup when clicking outside the form
    window.addEventListener("click", function (event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    let bookTestDrive = document.getElementById("bookTestDrive");
    let testDrivePopup = document.getElementById("testDrivePopup");
    let closeBtnTestDrive = testDrivePopup.querySelector(".close-btn");

    // Show Popup when "Book Test Drive" div is clicked
    bookTestDrive.addEventListener("click", function () {
        testDrivePopup.style.display = "flex";
    });

    // Hide Popup when close button is clicked
    closeBtnTestDrive.addEventListener("click", function () {
        testDrivePopup.style.display = "none";
    });

    // Hide popup when clicking outside the form
    window.addEventListener("click", function (event) {
        if (event.target === testDrivePopup) {
            testDrivePopup.style.display = "none";
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const shopOnlineBox = document.getElementById("shopOnlineBox");
    const shopFormPopup = document.getElementById("shopFormPopup");
    const closeShopForm = document.getElementById("closeShopForm");
    const carModelSelect = document.getElementById("carModel");
    const costInput = document.getElementById("cost");

    // Ensure the form is hidden initially
    shopFormPopup.classList.add("hidden");

    // Show form when clicking on "Shop Online" box
    shopOnlineBox.addEventListener("click", function () {
        shopFormPopup.classList.remove("hidden");
        shopFormPopup.classList.add("show");
    });

    // Close form when clicking on "X" button
    closeShopForm.addEventListener("click", function () {
        shopFormPopup.classList.add("hidden");
        shopFormPopup.classList.remove("show");
    });

    // Close form when clicking outside the form content
    window.addEventListener("click", function (event) {
        if (event.target === shopFormPopup) {
            shopFormPopup.classList.add("hidden");
            shopFormPopup.classList.remove("show");
        }
    });

    // Automatically set cost based on selected model
    carModelSelect.addEventListener("change", function () {
        const selectedOption = carModelSelect.options[carModelSelect.selectedIndex];
        costInput.value = selectedOption.getAttribute("data-price") || "";
    });
});
