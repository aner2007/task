
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const paginatedList2 = document.getElementById("paginated-list2");
    const listItems = paginatedList.querySelectorAll("li");
    const listItems2 = paginatedList.querySelectorAll("li");
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");

    const paginationLimit = 6;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    const pageCount2 = Math.ceil(listItems2.length / paginationLimit);
    let currentPage = 1;

    const disableButton = (button) => {
    button.classList.add("disabled");
    button.setAttribute("disabled", true);
};

    const enableButton = (button) => {
    button.classList.remove("disabled");
    button.removeAttribute("disabled");
};

    const handlePageButtonsStatus = () => {
    if (currentPage === 1) {
    disableButton(prevButton);
} else {
    enableButton(prevButton);
}

    if (pageCount === currentPage) {
    disableButton(nextButton);
} else {
    enableButton(nextButton);
}
        if (pageCount2 === currentPage) {
            disableButton(nextButton);
        } else {
            enableButton(nextButton);
        }
};

    const handleActivePageNumber = () => {
    document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex === currentPage) {
            button.classList.add("active");
        }
    });
};

    const appendPageNumber = (index) => {
    const pageNumber = document.createElement("button");
    pageNumber.className = "pagination-number";
    pageNumber.innerHTML = index;
    pageNumber.setAttribute("page-index", index);
    pageNumber.setAttribute("aria-label", "Page " + index);

    paginationNumbers.appendChild(pageNumber);
};

    const getPaginationNumbers = () => {
    for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
}
};

    const setCurrentPage = (pageNum) => {
    currentPage = pageNum;

    handleActivePageNumber();
    handlePageButtonsStatus();

    const prevRange = (pageNum - 1) * paginationLimit;
    const currRange = pageNum * paginationLimit;

    listItems.forEach((item, index) => {
    item.classList.add("hidden");
    if (index >= prevRange && index < currRange) {
    item.classList.remove("hidden");
}
});
        listItems2.forEach((item, index) => {
            item.classList.add("hidden");
            if (index >= prevRange && index < currRange) {
                item.classList.remove("hidden");
            }
        });
};

    window.addEventListener("load", () => {
    getPaginationNumbers();
    setCurrentPage(1);

    prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
});

    nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
});

    document.querySelectorAll(".pagination-number").forEach((button) => {
    const pageIndex = Number(button.getAttribute("page-index"));

    if (pageIndex) {
    button.addEventListener("click", () => {
    setCurrentPage(pageIndex);
});
}
});
});
