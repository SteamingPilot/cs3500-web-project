<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Bootstarp Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Theme -->
    <link rel="stylesheet" href="../styles/theme.css">

    <!-- css for individual page -->
    <link rel="stylesheet" href="../styles/games/tictac.css">

    <title>Tic Tac Toe</title>
</head>
<body>

    <!-- Navigation Bar  -->
    <nav id="navigation-bar" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.html">Play&Chat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Games
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item active" href="#">Tic Tac Toe</a>
                  <a class="dropdown-item" href="rps.html">Rock, Paper, Scissor</a>
                  <a class="dropdown-item" href="connect4.html">Connect 4</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.html">About Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../CONTACTUS.html">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a class="btn btn-primary ml-3" href="../singin.html">Sign In</a>
          </form>
        </div>
      </nav>

    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h1 id="game-title" class="display-4">Tic Tac Toe</h1>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 mb-3"   >
                <div id="game" class="center">

                    <table class="center">
                        <tr>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">X</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">O</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">X</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">X</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">O</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">X</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">O</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">X</button>
                            </td>
                            <td>
                                <button type="button" id="c" class="btn btn-outline-danger cell" id="all-input">O</button>
                            </td>
                        </tr>
                    </table>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-lg" id="reset">Restart</button>
                    </div>
            
                </div>
            </div>

            <!-- Chat and Scorboard -->
            <div class="col-lg-4 col-md-12">

                <div class="row">
                    <!-- ScoreBoard  -->
                    <div class="col-lg-12 col-md-6">
                        <div class="container">
                            <div class="row">
                                <div id="scoreboard">
                                    <h3 id="scoreboard-title">Scoreboad</h3>
                                    <table class="table table-sm table-dark table-hover background-transparent">
                                        <thead>
                                            <tr>
                                                <th>Player</th>
                                                <th>Wins</th>
                                                <th>Loses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">(You) Player Name</th>
                                                <td>5</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Opponent Player Name</th>
                                                <td>3</td>
                                                <td>5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Chat  -->
                    <div class="col-lg-12 col-md-6">
                        <div class="container border">
                            <!-- Chat Title  -->
                            <div id="chat-bar">
                                <h4 id="chatbar-title" class="pb-2">Chat</h4>
                            </div>
    
                            <!-- The Conversation  -->
                            <div id="chat-coversation" class="container">
                                <!-- Each row will a message from one Person  -->
                                <div class="chat row">
                                    <!-- Person Image  -->
                                    <div class="identity">
                                        <img class="person-img" src="../resources/images/paul.jpg" alt="">
                                    </div>
                                    <!-- Message  -->
                                    <div class="message align-self-center ml-5">
                                        <p class="text-secondary">Nice move</p>
                                    </div>
                                </div>
    
                                <div class="chat row mt-2">
                                    <div class="identity">
                                        <img class="person-img" src="../resources/images/tarin.jpg" alt="">
                                    </div>
                                    <div class="message align-self-center ml-5">
                                        <p class="text-secondary">Thank you. You also played very well</p>
                                    </div>
                                </div>
    
                                <div class="chat row mt-2">
                                    <div class="identity">
                                        <img class="person-img" src="../resources/images/paul.jpg" alt="">
                                    </div>
                                    <div class="message align-self-center ml-5">
                                        <p class="text-secondary">Thanks. Gotta go. Bye</p>
                                    </div>
                                </div>
                                <div class="chat row mt-2">
                                    <div class="identity">
                                        <img class="person-img" src="../resources/images/tarin.jpg" alt="">
                                    </div>
                                    <div class="message align-self-center ml-5">
                                        <p class="text-secondary">Bye Bye.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- New Message Chat  -->
                            <form action="#" class="mt-2">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="newMessage" placeholder="Type your message here">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
    
                        </div>
                    </div>
                    
                </div>
                

            </div>
        </div>


    </div>

    


    <!-- BootStarp Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html>