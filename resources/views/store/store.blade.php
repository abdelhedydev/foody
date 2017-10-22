@extends('layouts.app') 
@section('content')

<div class="ui grid">
    <!--main section-->
    <div class="twelve wide column">
        <!--main card -->
        <div class="ui card fluid">
            <div class="image">
                <img src="https://www.julen.ch/assets/Alpenhof/Restaurant-Alpenhof/_resampled/CroppedImage1600900-restaurant-alpenhof-zermatt.jpg">
            </div>
            <div class="content">
                <a class="header">Name of restaurant </a>
                <div class="right floated content">
                    <div class="ui button green">4.6</div>
                </div>
                <div class="meta">
                    <a class="ui image label">
                        Joe
                        </a>
                    <a class="ui image label">
                        Elliot
                        </a>
                    <a class="ui image label">
                        Stevie
                        </a>
                </div>
            </div>
            <div class="extra content">
                <button class="ui button">
                        <i class="feed icon"></i>
                        Follow
                    </button>
                <button class="ui button">
                        <i class="bookmark icon"></i>
                        bookmark
                    </button>
                <button class="ui button">
                        <i class="street view icon"></i>
                        been here 
                    </button>
                <button class="ui button">
                        <i class="star icon"></i>
                        Rate                </button>
                <button class="ui button">
                        <i class="image icon"></i>
                        Add a photo
                    </button>
                <button class="ui button">
                        <i class="add square icon"></i>
                        Add To collection
                    </button>
            </div>
        </div>
        <!--menu-->
        <div class="ui four item menu">
            <a class="item active">Overview</a>
            <a class="item">Reviews</a>
            <a class="item">Photos</a>
            <a class="item ">Menu</a>
        </div>
        <!--overview widget-->
        <div class="ui card fluid ">
            <div class="content">
                <div class="ui grid">
                    <div class="five wide column">
                        <h5><i class="mobile icon big "></i>Phone number</h5>
                        +216 97626041

                        <h5><i class="home icon big "></i>Cuisines</h5>
                        Pizza,Tounsi

                        <h5><i class="payment icon big"></i>Payments Options</h5>
                        -online<br> -On place<br> -Cash
                        <br> -Bank Card<br>


                    </div>

                    <div class="five wide column">
                        <h5><i class="map icon big "></i>Adresse</h5>
                        Largo Fumasoni Biondi, 5, Trastevere, Roma 00153
                        <br>
                        <div class="ui cards">
                            <br>
                            <div class="card">
                                <div class="content">
                                    <div class="header">
                                        <center>Map</center>
                                    </div>
                                </div>

                                <div class="image">
                                    <img src="https://cnet2.cbsistatic.com/img/H_zPLL8-QTZOLxJvgHQ1Jkz0EgY=/830x467/2013/07/10/f0bcef02-67c2-11e3-a665-14feb5ca9861/maps_routemap.png">
                                </div>

                                <div class="ui bottom attached button">
                                    <i class="location arrow icon"></i> Get directions
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="five wide column">
                        <h5><i class="ellipsis horizontal icon big "></i>More info</h5>
                        <i class="check circle icon green "></i> Breakfast<br>
                        <i class="check circle icon green "></i> Full Bar Available<br>
                        <i class="check circle icon green "></i> Group Meal<br>
                        <i class="check circle icon green "></i> Inside ZTL<br>
                        <i class="check circle icon green "></i> Outdoor Seating<br>
                        <i class="check circle icon green "></i> Wifi
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--side bar -->
    <div class="four wide column">
        <!--ads goes here -->
        <div class="ui card fluid">
            <div class="ui top left attached label yellow">Ad</div>
            <img src="https://tpc.googlesyndication.com/simgad/15639165454737860574" />
        </div>

        <!--opening hours widget-->
        <div class="ui card fluid">
            <div class="content">
                <center>
                    <h5><i class="wait icon big"></i>Opening hours</h5>
                </center>
                <hr>
                <center>
                    <table>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td><b>Mon</b></td>
                            <td>08:00 to 01:00</td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
        <!-- nearby stores widget -->

        <div class="ui card fluid">
            <div class="content">
                <center>
                    <h5><i class="marker icon big"></i>Nearby Restaurants</h5>
                </center>
                <hr>
                <div class="ui middle aligned divided list">
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">4.6</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/7/16554447/2cc8f6bab4daa88ad8db9022cb11ff99_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 1</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">5.0</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/7/16555777/14bf260b51132a37a01801adb40af032_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 2</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">3.0</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/8/16555628/a653966201ea43e3f79ce76d470f38a2_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 3</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">4.6</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/0/16555650/40eeeee52a6e17427ec028791a4cbd81_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection