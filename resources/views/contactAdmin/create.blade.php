<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')
    @vite('resources/js/Admincontact.js')
 
    <style>
        .note-editor {
            background-color: #ffffff;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>AutoWorld</span></p>
        <a href="/admin/car-list" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a id="point" href="/admin/contact" class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
        <a href="/admin/compare" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Compare</a>
        <a href="/admin/upload" class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
        <a id="admin" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fa-solid fa-user-shield"></i>
            &nbsp; {{ Auth::user()->name }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span class="caret"></span>
        </a>

        <div>
            <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Add Contact</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Add Contact</span>
            </div>
            <div class="clearfix"></div>
        </div>
        <br/>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <label id="text" for="name">Name</label>
                        <br>
                        <input style="width:20%" type="text" name="name" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label id="text" for="email">Email</label>
                        <br>
                        <input style="width:20%; height: 40px;" type="email" name="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label id="text" for="subject">Subject</label>
                        <br>
                        <input style="width:20%" type="text" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label id="text" for="message">Message</label>
                        <br>
                        <textarea class="note-editor" name="message" id="summernote"></textarea>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <br>
                    <button class="buttonSub" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
          $('#summernote').summernote({
            height: 200,
            disableDragAndDrop: true,
            disableAutoParagraph: true,
            callbacks: {
              onPaste: function(e) {
                // Loại bỏ thẻ <p> tự động được chèn khi dán
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                document.execCommand('insertText', false, bufferText);
              },
              onKeydown: function(e) {
                // Loại bỏ thẻ <p> tự động được chèn khi nhấn Enter
                if (e.keyCode === 13) {
                  document.execCommand('insertHTML', false, '<br/><br/>');
                  return false;
                }
              }
            }
          });
        });
    </script>
</body>
</html>
