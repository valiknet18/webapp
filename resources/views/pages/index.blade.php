@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m11 offset-m2 ">
            <div class="card card__dashboard">
                <div class="card-title"></div>
                <div class="card-content">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <img src="images/yuna.jpg" alt="" class="circle">
                            <span class="title">
                                <a href="">
                                    Title
                                </a>
                            </span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus imperdiet, pulvinar nulla in, venenatis erat. Etiam sed efficitur ante. Vivamus vehicula erat at orci tempus, eget dapibus nunc condimentum. Cras non orci scelerisque, laoreet nibh vel, maximus mauris. Morbi urna lacus, pretium id magna a, interdum eleifend purus. Donec consequat ante nec sapien scelerisque aliquam. Morbi hendrerit lacus in turpis lobortis auctor. Vestibulum luctus laoreet auctor. Praesent a urna accumsan, molestie massa in, varius risus. Nunc nibh diam, cursus posuere erat id, convallis sollicitudin augue. Fusce sit amet egestas justo. Praesent quis quam sollicitudin, egestas nibh sit amet, pharetra nibh. Mauris id venenatis ipsum. Donec eu augue quis risus tincidunt consectetur.

                                Mauris in malesuada diam, quis tincidunt tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vestibulum risus lacinia mauris vulputate, vitae lobortis nunc ornare. Duis auctor, ante non maximus placerat, arcu eros lobortis justo, non fringilla eros dui ac diam. Aenean sed arcu eleifend, imperdiet diam maximus, vehicula ligula. Etiam leo elit, sollicitudin et justo vel, cursus mollis eros. Aenean vitae ligula magna. Sed tristique tincidunt felis id porttitor. Donec sit amet dapibus sapien. Cras quis lorem nec magna malesuada lacinia eu sit amet nibh. Curabitur ut tortor elementum, efficitur ante condimentum, fringilla sem. Cras molestie sollicitudin nulla, ac placerat mauris ullamcorper ac.

                                Nullam dictum commodo ipsum,
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="center">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active darken-custom"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection