@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m11 offset-m2 ">
            <div class="card card__dashboard">
                <div class="card-title">Users</div>
                <div class="card-content">
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <li class="">
                            <div class="collapsible-header">
                                <img src="/assets/img/test_img.jpg" class="circle avatar" />
                                <span>
                                    Valentyn Hrynevych
                                </span>
                                <a href="" class="secondary-content">
                                    <i class="material-icons darken-custom-text">open_in_new</i>
                                </a>
                            </div>

                            <div class="collapsible-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus imperdiet, pulvinar nulla in, venenatis erat. Etiam sed efficitur ante. Vivamus vehicula erat at orci tempus, eget dapibus nunc condimentum. Cras non orci scelerisque, laoreet nibh vel, maximus mauris. Morbi urna lacus, pretium id magna a.
                                </p>
                                <p>
                                    <i class="mdi mdi-phone mdi-24px"></i> +380938648289, +380977229224 <br />
                                    <i class="mdi mdi-email mdi-24px"></i> valik.v1per@gmail.com <br />
                                    <i class="mdi mdi-skype mdi-24px"></i> v1per.19 <br />
                                    <i class="mdi mdi-slack mdi-24px"></i> valiknet18 <br />
                                </p>
                            </div>
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