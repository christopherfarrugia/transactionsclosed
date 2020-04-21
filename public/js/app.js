// MAKE SURE TO ONLY RUN THIS ON PORTAL PAGE

(function() {
const addBuyer = document.getElementById('add-buyer');
const buyersList = document.getElementById('buyers-list');
const buyers = JSON.parse(buyersList.dataset.buyers); // NOT SAFE // Mutable copy

console.log(buyersList, buyers)

console.log(addBuyer)

let counter = 0;

addBuyer.addEventListener('click', function() {
    buyersList.appendChild(buyerView({}, counter++));
});


const buyerView = function(buyer, id) { // null == boom
    const el = document.createElement('div')
    el.id = `buyer-row-${id}`;
    el.classList.add("buyer-row");
    el.innerHTML = `
<div class="form-row">
    <div class="col">
        <input name="buyer[first_name][]" value="${buyer.first_name || ''}" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <input name="buyer[last_name][]" value="${buyer.last_name || ''}" type="text" class="form-control" placeholder="Last name">
    </div>
</div>
<div class="form-row">
    <div class="col">
        <input name="buyer[email][]" value="${buyer.email || ''}" type="text" class="form-control" placeholder="Email Address">
    </div>
    <div class="col">
        <input name="buyer[telephone][]" value="${buyer.telephone || ''}" type="text" class="form-control" placeholder="Telephone">
    </div>
</div>
<button type="button" class="delete-row" data-id="${id}">X</button>
`;

    el.querySelector('.delete-row').addEventListener('click', function(event) {
        deleteRow(event.target.dataset.id);
    });

    return el;
}

const populateBuyers = function(list, buyers) {
    list.innerHTML = '';

    buyers.forEach((buyer, i) => {
        list.appendChild(buyerView(buyer, counter++));
    });
}

function deleteRow(id) {
    buyersList.removeChild(document.getElementById(`buyer-row-${id}`));
}

populateBuyers(buyersList, buyers);
}());
