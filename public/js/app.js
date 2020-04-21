// MAKE SURE TO ONLY RUN THIS ON PORTAL PAGE

(function() {
    const parseHTML = function(str) {
        const el = document.implementation.createHTMLDocument();
        el.body.innerHTML = str;
        return el.body.children;
    };

    const createDynamicSection = function(name, container, addButton, templateFn) {
        const data = JSON.parse(container.dataset.json);

        const createView = function(item = {}) {
            const el = document.createElement('row')
            const id = item.id || `tmp-${Math.random()}`;

            el.classList.add(`${name}-fields`);
            el.dataset.id = id;
            el.innerHTML = `
                <div class="row">
                    <div class="col-10">
                        ${templateFn(item, id)}
                    </div>

                    <div class="col-2">
                        <button type="button" class="delete-row" data-id="${id}">X</button>
                    </div>
                </div>
            `;

            el.querySelector('.delete-row').addEventListener('click', function(event) {
                container.removeChild(el);
            });

            return el;
        };

        container.innerHTML = '';

        data.forEach((item) => {
            container.appendChild(createView(item));
        });

        addButton.addEventListener('click', function() {
            container.appendChild(createView());
        });
    };

    const buyerView = (buyer, id = new Date().getTime()) => `
        <fieldset>
            <input name="buyer[${id}][id]" value="${buyer.id || ''}" type="hidden">
            <div class="form-row">
                <div class="col">
                    <input name="buyer[${id}][first_name]" value="${buyer.first_name || ''}" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input name="buyer[${id}][last_name]" value="${buyer.last_name || ''}" type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <input name="buyer[${id}][email]" value="${buyer.email || ''}" type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="col">
                    <input name="buyer[${id}][telephone]" value="${buyer.telephone || ''}" type="text" class="form-control" placeholder="Telephone">
                </div>
            </div>
        </fieldset>
    `;

    const sellerView = (seller, id = new Date().getTime()) => `
        <fieldset>
            <input name="seller[${id}][id]" value="${seller.id || ''}" type="hidden">
            <div class="form-row">
                <div class="col">
                    <input name="seller[${id}][first_name]" value="${seller.first_name || ''}" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input name="seller[${id}][last_name]" value="${seller.last_name || ''}" type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <input name="seller[${id}][email]" value="${seller.email || ''}" type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="col">
                    <input name="seller[${id}][telephone]" value="${seller.telephone || ''}" type="text" class="form-control" placeholder="Telephone">
                </div>
            </div>
        </fieldset>
    `;


    createDynamicSection(
        'buyer',
        document.getElementById('buyer-list'),
        document.getElementById('add-buyer'),
        buyerView
    );

    createDynamicSection(
        'seller',
        document.getElementById('seller-list'),
        document.getElementById('add-seller'),
        sellerView
    );
}());
