<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/p1.css">
</head>

<body>

    <?php if (isset($_GET['error'])) : ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <div class="background">
        <div class="header">
            <img src="css/images/Rajalakshmi_Engineering_College_(REC)_Chennai_Logo.jpg" alt="">
            <h1 class="clg">Rajalakshmi Engineering College</h1>
            <h2 class="dept">Department of Mechanical Engineering</h2>
        </div>
        <div class="frm">
            <form method="POST" enctype="multipart/form-data" action="upload.php">
                <h2 class="head">Upload Pdf</h2>
                <div class="ip">
                    <input type="file" name="file" class="btn1">
                    <input type="submit" name="submit" value="Upload" class="btn2">
                </div>
            </form>
        </div>
        <nav>
            <ul class="sidebar">
                <li class="menubtn" onclick=hideSidebar()><a class="menubtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="view.php">Uploaded Pdf's</a></li>
                <li><a href="#">About</a></li>
                <li><a href="admin.php">Logout</a></li>
            </ul>
            <ul>
                <li class="menubtn" onclick=showSidebar()><a class="menubtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 -960 960 960" width="36">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>Menu</a></li>
            </ul>
        </nav>
    </div>
    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>

</body>

</html>