<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>List of Posts</h1>
   <table>
     <tr><th>Date</th><th>Title</ th></tr>
   <?php foreach  ($animals as $post): ?>
     <tr>
       <td><?php echo $post['name' ] ?></td>
       <td> <?php echo $post['age'] ?> </td>
     </tr>
   <?php  endforeach; ?>
   </table>
</body>
</html>