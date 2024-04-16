<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Application</title>
  </head>

  <style>
    @font-face {
      font-family: headFont;
      src: url(UI/fonts/Summer-Vibes-OTF.otf);
    }

    @font-face {
      font-family: myFont;
      src: url(UI/fonts/OpenSans-Regular.ttf);
    }

    #wrapper {
      max-width: 900px;
      min-height: 500px;
      display: flex;
      margin: auto;
      color: white;
      font-family: myFont;
      
      font-size: 13px;
    }

    #left_pannel {
      min-height: 500px;
      background-color: #27344b;
      flex: 1;
      text-align: center;
    }

    #profile_image {
      width: 50%;
      border: solid thin white;
      border-radius: 50%;
      margin: 10px;
    }

    #left_pannel label {
      width: 100%;
      height: 20px;
      display: block;
      background-color: #404b56;
      border-bottom: solid thin #ffffff55;
      cursor: pointer;
      padding: 5px;
      transition:all 1s ease ;
    }

    #left_pannel label:hover {
      background-color: #778593;
    }

    #left_pannel label img {
      float: right;
      width: 25px;
    }
    
    #right_pannel {
      min-height: 500px;
      flex: 4;
      text-align: center;
    }

    #header {
      height: 70px;
      background-color: #485b6c;
      font-size: 40px;
      text-align: center;
      font-family: headFont;
    }

    #inner_left_pannel {
      flex: 1;
      min-height: 430px;
      background-color: #383e48;
    }

    #inner_right_pannel {
      flex: 2;
      min-height: 430px;
      background-color: #f2f7f8;
      transition: all 2s ease;
    }

    #radio_contacts:checked ~ #inner_right_pannel {
      flex: 0;
    }

    #radio_settings:checked ~ #inner_right_pannel {
      flex: 0;
    }

  </style>

  <body>
    <div id="wrapper">
      <div id="left_pannel">
        <div style="padding: 10px">
          <img id="profile_image" src="ui/images/user3.jpg" alt="" />
          <br />
          Jay Patel
          <br />
          <span style="font-size: 12px; opacity: 0.5">jaypatel@gmail.com</span>
          <br>
          <br>
          <br>
          <div>
            <label id="label_chat" for="radio_chat">chat <img src="UI/icons/chat.png" alt=""></label>
            <label id="label_contacts" for="radio_contacts">contacts <img src="UI/icons/contacts.png" alt=""></label>
            <label id="label_settings" for="radio_settings">settings <img src="UI/icons/settings.png" alt=""></label>
          </div>
        </div>
      </div>
      <div id="right_pannel">
        <div id="header">Chat Application</div>
        <div id="container" style="display: flex">
          
          <div id="inner_left_pannel">
 
          </div>

          <input type="radio" id="radio_chat" name="myradio" style="display: none;">
          <input type="radio" id="radio_contacts" name="myradio" style="display: none;">
          <input type="radio" id="radio_settings" name="myradio" style="display: none;">

          <div id="inner_right_pannel">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
