<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quotes From Tech People</title>
  <style>
    body {
      background-color: #607d8b;
      color: #fff;
      padding: 50px;
      font-family: sans-serif;
      text-align: center;
      text-shadow: 0px 2px 0px black;
    }
    quote {
      font-size: 1.5em;
      font-style: italic;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <h1>Quotes From Tech People</h1>

  <?php
    $quotes = [
      "Talk is cheap. Show me the code.<br> — Linus Torvalds",
      "Everybody in this country should learn how to program a computer, because it teaches you how to think.<br> — Steve Jobs",
      "Stay hungry, stay foolish.<br> — Steve Jobs",
      "You've got to start with the customer experience and work backwards to the technology. You can't start with the technology and try to figure out where you're going to sell it.<br> — Steve Jobs",
      "The best way to predict the future is to invent it.<br> — Alan Kay",
      "Technology is anything that wasn't around when you were born.<br> — Alan Kay",
      "Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.<br> — Bill Gates",
      "While we're all very dependent on technology, it doesn't always work.<br> — Bill Gates",
      "Software is a great combination between artistry and engineering.<br> — Bill Gates",
      "Stone Age. Bronze Age. Iron Age. We define entire epics of humanity by the technology they use. —<br> Reed Hastings",
      "Engineering is the closest thing to magic that exists in the world.<br> — Elon Musk",
      "Coding is like writing, and we live in a time of the new industrial revolution. What's happened is that maybe everybody knows how to use computers, like they know how to read, but they don't know how to write.<br> — Susan Wojcicki",
      "One of my most productive days was throwing away 1,000 lines of code.<br> — Ken Thompson",
      "Machines take me by surprise with great frequency.<br> — Alan Turing",
      "Code never lies, comments sometimes do.<br> — Ron Jeffries"
    ];

    $randElement = rand(0, count($quotes) - 1);

    $quote = $quotes[$randElement];
  ?>

  <quote>
    <?php echo $quote; ?>
  </quote>

</body>
</html>