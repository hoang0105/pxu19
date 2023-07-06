<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
    // Step 1: Connect to the database
    include "connectDBv2.php";
    include "header.php";

    // Step 2: Retrieve the list of categories
    $str = "SELECT * FROM TheLoai";
    $result = $conn->query($str);
    ?>

    <h1>Danh sách Thể loại</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Thể loại</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1; // Start counting from 1
                while ($rows = $result->fetch_assoc()) { 
                    $idTL = $rows['idTL'];
                    $tenTL = $rows['TenTL'];
                    $anHien = ($rows['AnHien'] == 1) ? "Hiện" : "Ẩn";
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $tenTL; ?></td>
                        <td><?php echo $anHien; ?></td>
                        <td>
                            <button class="btn btn-success btn-sm edit-btn" data-id="<?php echo $idTL; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button> |
                            <a href="delete_theloai.php?idTL=<?php echo $idTL; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="update_theloai.php" method="POST">
                        <input type="hidden" name="idTL" id="idTL" value="">
                        <div class="mb-3">
                            <label for="tenTL" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="tenTL" name="tenTL" required>
                        </div>
                        <div class="mb-3">
                            <label for="anHien" class="form-label">Visibility</label>
                            <select class="form-select" id="anHien" name="anHien" required>
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            // Retrieve and set the idTL value when the modal is shown
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var idTL = button.data('id'); // Extract idTL value from data-id attribute
                var modal = $(this);
                modal.find('#idTL').val(idTL); // Set the idTL value in the hidden input field
                
                // Retrieve the category name and visibility from the corresponding row
                var categoryName = button.closest('tr').find('td:nth-child(2)').text();
                var visibility = button.closest('tr').find('td:nth-child(3)').text();
                
                // Set the retrieved values in the form fields
                modal.find('#tenTL').val(categoryName);
                modal.find('#anHien').val(visibility === 'Hiện' ? 1 : 0);
            });
        });
    </script>
</body>

</html>

