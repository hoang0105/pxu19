<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="uploadd.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tentd" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="tieude" name="tieude" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Tóm tắt</label>
            <input type="text" class="form-control" id="tomtat" name="tomtat" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="urlHinh" name="urlHinh" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Ngày</label>
            <input type="date" class="form-control" id="ngay" name="ngay" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">ID User</label>
            <input type="text" class="form-control" id="iduse" name="iduse" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">ID SK</label>
            <input type="text" class="form-control" id="idsk" name="idsk" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">ID LT</label>
            <input type="text" class="form-control" id="idlt" name="idlt" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">ID TL</label>
            <input type="text" class="form-control" id="idtl" name="idtl" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Số lần xem</label>
            <input type="text" class="form-control" id="solanxem" name="solanxem" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Tin nổi bật</label>
            <input type="text" class="form-control" id="noibat" name="noibat" required>
        </div>
        <div class="mb-3">
            <label for="tentd" class="form-label">Ẩn hiện</label>
            <input type="text" class="form-control" id="anhien" name="anhien" required>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>