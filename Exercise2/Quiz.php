<?php

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $numCorrect = 0;

    if ($answer1 == "A")
    { $numCorrect++; }
    if ($answer2 == "A")
    { $numCorrect++; }
    if ($answer3 == "D")
    { $numCorrect++; }
    if ($answer4 == "C")
    { $numCorrect++; }
    if ($answer5 == "B")
    { $numCorrect++; }


    echo "Question 1: The best sport is...<br>";
    if ($answer1 == "A")
    {
      echo "You Answered: Basketball <br>";
    }
    elseif ($answer1 == "B")
    {
      echo "You Answered: Football <br>";
    }
    elseif ($answer1 == "C")
    {
      echo "You Answered: Soccer <br>";
    }
    elseif ($answer1 == "D")
    {
      echo "You Answered: None of the above <br>";
    }
    echo "Correct Answer: Basketball <br><br>";


    echo "Question 2: Viv's favorite food is...<br>";
    if ($answer2 == "A")
    {
      echo "You Answered: Chicken burritos <br>";
    }
    elseif ($answer2 == "B")
    {
      echo "You Answered: Steak Burritos <br>";
    }
    elseif ($answer2 == "C")
    {
      echo "You Answered: vegan snacks <br>";
    }
    elseif ($answer2 == "D")
    {
      echo "You Answered: dog food <br>";
    }
    echo "Correct Answer: Chicken burritos <br><br>";


    echo "Question 3: Best college in the world for undergrad is...<br>";
    if ($answer3 == "A")
    {
      echo "You Answered: Harvard <br>";
    }
    elseif ($answer3 == "B")
    {
      echo "You Answered: Stanford <br>";
    }
    elseif ($answer3 == "C")
    {
      echo "You Answered: MIT <br>";
    }
    elseif ($answer3 == "D")
    {
      echo "You Answered: KU <br>";
    }
    echo "Correct Answer: KU <br><br>";


    echo "Question 4) Best major is...<br>";
    if ($answer4 == "A")
    {
      echo "You Answered: Chem E <br>";
    }
    elseif ($answer4 == "B")
    {
      echo "You Answered: Mech E <br>";
    }
    elseif ($answer4 == "C")
    {
      echo "You Answered: Computer Science <br>";
    }
    elseif ($answer4 == "D")
    {
      echo "You Answered: Electrical Engineering <br>";
    }
    echo "Correct Answer: Computer Science <br><br>";


    echo "Question 5) The most awesome person in the world is<br>";
    if ($answer5 == "A")
    {
      echo "You Answered: Elon Musk <br>";
    }
    elseif ($answer5 == "B")
    {
      echo "You Answered: Vivek Tallavajhala <br>";
    }
    elseif ($answer5 == "C")
    {
      echo "You Answered: Bill Gates <br>";
    }
    elseif ($answer5 == "D")
    {
      echo "You Answered: Warren Buffet<br>";
    }
    echo "Correct Answer: Vivek Tallavajhala<br><br>";

    if($numCorrect == 0)
    {
      echo "You got a 0%";
    }
    elseif($numCorrect == 1)
    {
      echo "You got a 20%";
    }
    elseif($numCorrect == 2)
    {
      echo "You got a 40%";
    }
    elseif($numCorrect == 3)
    {
      echo "You got a 60%";
    }
    elseif($numCorrect == 4)
    {
      echo "You got an 80%";
    }
    elseif($numCorrect == 5)
    {
      echo "You got a 100%";
    }

?>
