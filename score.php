
<?php
 class Score{
        private string $id; 
        private int $user_id; 
        private int $score;
        private string $comments; 
        private string $dates ;


                public function __construct($id, $user_id,$score,$comments=null,$dates){
                
                       $this->id=$id; 
                        $this->user_id=$user_id; 
                        $this->score=$score;
                        $this->comments=$comments;
                        $this->dates=$dates;
            }


            public function getId(){
                return $this->id; 
            }
    
            public function setId($id){
                $this->id= $id; 
            }

            public function getUserId(){
                return $this->user_id; 
            }
            public function setUserId($user_id){
                $this->user_id=$user_id; 

            }


            public function getScore():int{
                return $this->score; 
            }

            public function setScore($score):int{
                $this->score= $score; 
            }

            public function getComments():string{
                return $this->comments; 
            }

            public function setComments($comments):string{
                    $this->comments=$comments; 
            }

            public function getDate(): string{
                return $this->dates; 
            }


            public function setDate($dates):string{
                    $this->dates=$dates;
            }
        




 }


