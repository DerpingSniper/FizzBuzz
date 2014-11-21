<html>
    <head>
        <title>FizzBuzz</title>
    </head>
    <body>
        
        <h1>FizzBuzz to 40</h1>
        <div>
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    First # <input type="number" name="num1">
                    Second # <input type="number" name="num2">
                    <input type="hidden" name="task" value="FizzBuzz">
                    <input type="submit">
                </form>
            </div>
            <div id="output">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") 
                    {
                        $task = $_POST["task"];
                    }
                    else
                    {
                        $task = "";   
                    }
                    if($task == "FizzBuzz")
                    {  
                        $n1 = $_POST["num1"];
                        $n2 = $_POST["num2"];

                        for($i = 1; $i < 40; $i++)
                        {
                            if($i % ($n1 * $n2) == 0)
                            {
                                print "FizzBuzz! <br>";
                            }
                            elseif($i % $n1 == 0)
                            {
                                print "Fizz <br>";
                            }
                            elseif($i % $n2 == 0)
                            {
                                print "Buzz <br>";
                            }
                            else
                            {
                                print $i . "<br>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>