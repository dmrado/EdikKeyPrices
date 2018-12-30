<script>//делаем две колокнки site-bar-left 2 колонки и основную 10 колонок потом в них переключим форму, возможно стоит воткнуть этот скрипт прямо в main в layouts.pc
    var blocks = document.createElement('div');
    blocks.setAttribute('id', 'blocks');
    blocks.setAttribute('class', 'row');
    document.getElementById('wrapper').appendChild(blocks);

    var colLeft = document.createElement('div');
    colLeft.setAttribute('id', 'colLeft');
    colLeft.setAttribute('class', 'col-sm-3');
    colLeft.style.border = '1px black solid';
    colLeft.style.height = '600px';
    colLeft.style.margin = '20px 0';
    colLeft.style.backgroundColor = 'darkblue';
    //colLeft.style.position = 'relative';
    //colLeft.setAttribute('class', 'text-center');
    blocks.appendChild(colLeft);

    var colRight = document.createElement('div');
    colRight.setAttribute('id', 'colRight');
    colRight.setAttribute('class', 'col-sm-9');
    colRight.style.border = '1px black solid';
    colRight.style.height = '600px';
    colRight.style.margin = '20px 0';

    var formKeyChoice = document.createElement('form');
    // form.setAttribute('id', 'formKeyChoice');
    // form.setAttribute('name', 'formKeyChoice');
    // form.setAttribute('method', 'post');
    // form.setAttribute('action', '#');
    // var inputCarBrand = document.createElement('input');
    // inputCarBrand.setAttribute('type', 'text');
    // inputCarBrand.setAttribute('placeholder', 'Введите марку машинки');
    // var submit = document.createElement('button');
    // submit.setAttribute('type', 'submit');
    // submit.setAttribute('class', 'class="col-sm-offset-2 col-sm-4');
    // submit.setAttribute('class', 'btn btn-succes');
    //
    // inputCarBrand.appendChild(submit);
    // formKeyChoice.appendChild(inputCarBrand);
    // colRight.appendChild(formKeyChoice);


    formKeyChoice.innerHTML = 'Сюда потом вкорячить форму сверху динамически, потому что потом будет еще форма заказа динамически';
    colRight.appendChild(formKeyChoice);

    //colRight.style.position = 'relative';
    //colRight.setAttribute('class', 'text-center');
    blocks.appendChild(colRight);
</script>