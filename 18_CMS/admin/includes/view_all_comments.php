<table class="table table-bordered table-hover">
    <thead>
        <tr>

            <td>Id</td>
            <td>Author</td>
            <td>Comment</td>
            <td>Email</td>
            <td>Status</td>
            <td>In response to</td>
            <td>Date</td>
            <td>Approve</td>
            <td>Unapprove</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM comments ";
        $select_comments = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_comments)) {
            $comment_id = $row["comment_id"];
            $comment_post_id = $row["comment_post_id"];
            $comment_author = $row["comment_author"];
            $comment_content = $row["comment_content"];
            $comment_email = $row["comment_email"];
            $comment_status = $row["comment_status"];
            $comment_date = $row["comment_date"];




            echo "<tr>";
            echo "<td>$comment_id </td>";
            echo "<td>$comment_author </td>";
            echo "<td>$comment_content </td>";
            echo "<td>$comment_email </td>";
            echo "<td>$comment_status </td>";

            $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
            $select_post_id_query = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_post_id_query)){
                $post_id = $row["post_id"];
                $post_title = $row["post_title"];
                echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
            }

            echo "<td>$comment_date </td>";
            echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>";
            echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>";
            
            echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
            echo "</tr>";
        }

        ?>

    </tbody>
</table>

<?php
if (isset($_GET["approve"])) {
    $the_comment_id = $_GET["approve"];

    $query = "UPDATE comments set comment_status = 'approved' WHERE comment_id = $the_comment_id ";

    $approve_comment_delete = mysqli_query($connection, $query);

    // confirmQuery($query_delete);
    header("Location: comments.php");
}
?>

<?php
if (isset($_GET["unapprove"])) {
    $the_comment_id = $_GET["unapprove"];

    $query = "UPDATE comments set comment_status = 'unapproved' WHERE comment_id = $the_comment_id ";

    $unapprove_comment_delete = mysqli_query($connection, $query);

    // confirmQuery($query_delete);
    header("Location: comments.php");
}
?>

<?php
if (isset($_GET["delete"])) {
    $the_comment_id = $_GET["delete"];

    $query = "DELETE FROM comments WHERE comment_id = $the_comment_id ";

    $query_delete = mysqli_query($connection, $query);

    // confirmQuery($query_delete);
    header("Location: comments.php");
}
?>
