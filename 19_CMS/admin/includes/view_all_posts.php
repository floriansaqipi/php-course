<table class="table table-bordered table-hover">
    <thead>
        <tr>

            <td>Id</td>
            <td>Author</td>
            <td>Title</td>
            <td>Category</td>
            <td>Status</td>
            <td>Image</td>
            <td>Tags</td>
            <td>Comments</td>
            <td>Date</td>
            <td>View Post</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM posts ";
        $select_posts = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_posts)) {
            $post_id = $row["post_id"];
            $post_author = $row["post_author"];
            $post_title = $row["post_title"];
            $post_category_id = $row["post_category_id"];
            $post_status = $row["post_status"];
            $post_image = $row["post_image"];
            $post_tags = $row["post_tags"];
            $post_comment_count = $row["post_comment_count"];
            $post_date = $row["post_date"];

            echo "<tr>";
            echo "<td> $post_id </td>";
            echo "<td>$post_author </td>";
            echo "<td>$post_title </td>";

            $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
            $select_categories = mysqli_query($connection, $query);
    
            $cat_title = "";
            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row["cat_id"];
                $cat_title = $row["cat_title"];
                echo "<td>$cat_title</td>";
            }
            echo "<td>$post_status </td>";
            echo "<td><img width=100 class='img-responsive' src='../images/$post_image' alt = 'image'></td>";
            echo "<td>$post_tags </td>";
            echo "<td>$post_comment_count </td>";
            echo "<td>$post_date</td>";
            echo "<td><a href='../post.php?p_id={$post_id}'>View Post</a></td>";
            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
            echo "<td><a onClick=\"javascript: return confirm('you want to delete')\" href='posts.php?delete={$post_id}'>Delete</a></td>";
            echo "</tr>";
        }

        ?>

    </tbody>
</table>

<?php 
    if(isset($_GET["delete"])){
        $the_post_id = $_GET["delete"];

        $query = "DELETE FROM posts WHERE post_id = $the_post_id";

        $query_delete = mysqli_query($connection, $query);
        
        // confirmQuery($query_delete);
        header("Location: posts.php");

    }
?>