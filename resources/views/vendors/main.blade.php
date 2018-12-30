@extends(request()->route()->getController()->parentView)
@section("title", "Главная")
@section("main")<!--это помещается в основное содержимое шаблона-родителя"-->

@include('vendors.face')
@include('vendors.form')


@if (request()->route()->getController()->isMobile)<!--если устройство мобильное, то дополнительно выводим ссылки на страницы политики и "О сайте" так как здесь нет панели навигации-->
    <ul>
        <li><a href="/#">Заглушка 1</a></li>
        <li><a href="/#">Заглушка 2</a></li>
    </ul>
@endif



@endsection