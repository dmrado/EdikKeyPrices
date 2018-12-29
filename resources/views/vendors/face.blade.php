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

    var form = document.createElement('form');
    form.innerText = 'Сюда потом вкорячить форму сверху динамически, потому что потом будет еще форма заказа динамически';
    colRight.appendChild(form);

    //colRight.style.position = 'relative';
    //colRight.setAttribute('class', 'text-center');
    blocks.appendChild(colRight);
</script>