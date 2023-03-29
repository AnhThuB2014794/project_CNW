const filters = document.getElementsByClassName('filter');
console.log(filters);

const menu = ['trangchu', 'sanpham', 'gioithieu', 'bangsize', 'page8', 'insta'];

const closeUl = document.getElementsByClassName('close-ul')[0];
const ul = document.getElementsByClassName('ul')[0];

closeUl.addEventListener('click', () => {
    if (ul.classList.contains('ul')) {
        ul.classList.remove('ul');
    } else {
        ul.classList.add('ul');
    }
});

const openMenu = document.getElementsByClassName('menu')[0];
const model = document.getElementsByClassName('model')[0];
openMenu.addEventListener('click', () => {
    model.style.display = 'flex';
});

const closeModel = document.getElementsByClassName('close')[0];
closeModel.addEventListener('click', () => {
    model.style.display = 'none';
});

const arrayProduct = {
    sp1: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/26_1181703ee7254501a0eb22b333f2ccf2_master.webp',
        price: 190000,
    },
    sp2: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/38_a760baf21c99437f91c82471ffb6b7fd_master.webp',
        price: 190000,
    },
    sp3: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/14_f4d83bdb6db24e84a03ad7e389db78a0_master.webp',
        price: 190000,
    },
    sp4: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/13_b0e025e20ed2499b8ee0ff13cf84ed30_master.webp',
        price: 190000,
    },
    sp5: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/8_1fb9a3beb4524aaf84e7b00e95f68d0d_master.webp',
        price: 190000,
    },
    sp6: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/1__2__faa864ffecf54033a8c5cc68f614d158_master.webp',
        price: 190000,
    },
    sp7: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/1_d42f4103ecb141f1ae76aff6826cba87_master.webp',
        price: 190000,
    },
    sp8: {
        name: '8YO LULLABY TEE Ver2.0 # 3 COLOR',
        img: 'image/product/1_d42f4103ecb141f1ae76aff6826cba87_master.webp',
        price: 190000,
    },
};

const arrayColor = {
    Black: {
        img: 'image/product/26_1181703ee7254501a0eb22b333f2ccf2_master.webp',
    },
    White: {
        img: 'image/product/color/52_3deb2f1708a547c79d96e8c11a786936_master.webp',
    },
    Green: {
        img: 'image/product/color/30_c37cb0235c5d44f19c708d9d89a540aa_master.webp',
    },
};

const addProduct = {};

const openProduct = (code) => {
    window.localStorage.setItem(0, code);
    window.location = 'product.html';
};

const domImg = () => {
    let fomatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
    });
    const img = document.getElementsByClassName('img-product')[0];
    const span = document.getElementById('name');
    const value = window.localStorage.getItem(0);
    img.src = arrayProduct[value].img;
    span.innerHTML = arrayProduct[value].name;

    const nameProduct = document.getElementsByClassName('name-product')[0];
    const price = document.getElementsByClassName('price')[0];
    const mausac = document.getElementsByClassName('mausac')[0];

    nameProduct.innerHTML = arrayProduct[value].name;
    price.innerHTML = fomatter.format(arrayProduct[value].price);

    // color
    const colors = document.getElementsByClassName('color');

    Array.from(colors).map((color) => {
        addProduct.colors = 'black';
        color.addEventListener('click', () => {
            // console.log(arrayColor[color.dataset.color].img);
            for (let i = 0; i < colors.length; i++) {
                colors[i].classList.remove('active-color');
            }
            color.classList.add('active-color');
            img.src = arrayColor[color.dataset.color].img;
            mausac.innerHTML = color.dataset.color;
            getcolor = color.dataset.color;
            addProduct.colors = color.dataset.color;
        });
    });
    // size
    const sizes = document.getElementsByClassName('size');
    Array.from(sizes).map((size) => {
        addProduct.sizes = 'M';
        size.addEventListener('click', () => {
            for (let i = 0; i < sizes.length; i++) {
                sizes[i].classList.remove('active-size');
            }
            size.classList.add('active-size');
            addProduct.sizes = size.dataset.set;
        });
    });

    // input
    const buttons = document.getElementsByClassName('button');
    const valueInput = document.getElementById('value');
    Array.from(buttons).map((button) => {
        addProduct.counters = 1;
        button.addEventListener('click', () => {
            if (button.id === 'next') {
                valueInput.value++;
                addProduct.counters = valueInput.value;
            }
            if (valueInput.value > 1) {
                if (button.id === 'pre') {
                    valueInput.value--;
                    addProduct.counters = valueInput.value;
                }
            }
        });
    });
    addProduct.sp = value;
    // table
    const open = document.getElementsByClassName('openTable')[0];
    const close = document.getElementsByClassName('closeTable')[0];
    const tableSize = document.getElementsByClassName('table-size')[0];
    open.addEventListener('click', () => {
        tableSize.style.display = 'block';
        open.style.display = 'none';
        close.style.display = 'block';
    });

    close.addEventListener('click', () => {
        tableSize.style.display = 'none';
        open.style.display = 'block';
        close.style.display = 'none';
    });
    // slide
    const card = document.getElementsByClassName('card');
    const slide = document.getElementsByClassName('slide')[0];
    const next = document.getElementsByClassName('next')[0];
    const pre = document.getElementsByClassName('pre')[0];
    const size = card[0].clientWidth;
    let counter = 0;
    // slide.style.transform = 'translateX(' + -size * counter + 'px)';
    next.addEventListener('click', () => {
        slide.style.transition = 'transform 0.4s ease-in-out';
        if (counter < card.length - 4) {
            counter++;
            slide.style.transform = 'translateX(' + -size * counter + 'px)';
        }
    });
    pre.addEventListener('click', () => {
        slide.style.transition = 'transform 0.4s ease-in-out';

        if (counter >= 1) {
            counter--;
            slide.style.transform = 'translateX(' + -size * counter + 'px)';
        }
    });
};
let countCart = 0;
let countCart2 = 0;
const bgDanger = document.getElementsByClassName('bg-danger')[0];

const gio = document.getElementsByClassName('gio')[0];
let countArray = [];
const Gio = () => {
    window.localStorage.setItem(addProduct.sp, JSON.stringify(addProduct));
    for (let i = 0; i < window.localStorage.length; i++) {
        if (window.localStorage.key(i) != 0 && !countArray.includes(window.localStorage.key(i))) {
            countArray.push(window.localStorage.key(i));
            countCart2++;
        }
        bgDanger.innerHTML = countCart2;
    }
};

const countGio = () => {
    for (let i = 0; i < window.localStorage.length; i++) {
        if (window.localStorage.key(i) != 0 && !countArray.includes(window.localStorage.key(i))) {
            countArray.push(window.localStorage.key(i));
            countCart2++;
        }
        bgDanger.innerHTML = countCart2;
    }
};

const gotoGio = () => {
    window.location = 'cart.html';
};
// gio.addEventListener('click', () => {
//     window.localStorage.setItem(addProduct.sp, JSON.stringify(addProduct));
//     window.location = 'cart.html';
// });

const showCart = () => {
    let fomatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
    });
    const table = document.getElementsByClassName('table')[0];
    const total = document.getElementsByClassName('totalMoney')[0];
    const empty = document.getElementsByClassName('empty')[0];
    const note = document.getElementsByClassName('note')[0];
    let totalMoney = 0;
    if (window.localStorage.length === 1) {
        empty.style.display = 'block';
        note.style.display = 'none';
    } else {
        empty.style.display = 'none';
        note.style.display = 'block';
    }
    for (let i = 0; i < window.localStorage.length; i++) {
        const tr = document.createElement('tr');
        const td = document.createElement('td');
        const name = document.createElement('td');
        const price = document.createElement('td');
        const button = document.createElement('button');
        if (window.localStorage.key(i) != 0) {
            countCart++;
            const key = window.localStorage.key(i);
            const value = JSON.parse(window.localStorage.getItem(key));
            console.log(value);
            td.innerHTML = "<img src='" + arrayProduct[value.sp].img + "'/>";

            button.setAttribute('data-key', window.localStorage.key(i));
            button.onclick = function () {
                removeKey(this.dataset.key);
            };
            button.style = 'background: lightblue; width: 25px; height: 25px';
            button.innerHTML = '<span>Xóa</span>';

            td.appendChild(button);
            tr.appendChild(td);
            table.appendChild(tr);

            name.innerHTML = arrayProduct[value.sp].name + ' (' + value.sizes + ')';
            tr.appendChild(name);
            console.log(typeof value.counters);
            price.innerHTML = fomatter.format(160000 * value.counters);
            tr.appendChild(price);

            totalMoney = totalMoney + 160000 * value.counters;
        }
    }
    total.innerHTML = fomatter.format(totalMoney);
    bgDanger.innerHTML = countCart;
};

const removeKey = (key) => {
    window.localStorage.removeItem(key);
    window.location = 'cart.html';
};

// navigation

const navigation = ['trangchu', 'sanpham', 'bangsize'];

const activeNavi = (key) => {
    const filters = document.getElementsByClassName('filter');

    for (let i = 0; i < navigation.length; i++) {
        filters[i].classList.remove('active');
    }
    document.getElementById(key).classList.add('active');
};
