<?php

namespace App;

class Post{

  protected $comments = [];

 /**
  * It adds a comment to the comments array
  * 
  * @param Comment comment The comment to add to the post.
  */
  public function addComment(Comment $comment){

    $this->comments[] = $comment;
  }

 /**
  * It returns the number of comments in the comments array
  * 
  * @return The number of comments in the array.
  */
  public function countComments(){

    return count($this->comments);
  }

 /**
  * It returns the comments.
  * 
  * @return The comments property of the object.
  */
  public function getComments(){

    return $this->comments;
  }
}