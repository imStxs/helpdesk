<?php
$conn = mysqli_connect('127.0.0.1', 'root', '','helpdesk');
if( $conn == false )
{
echo 'Не удалось подключиться к базе данных!<br>';
exit();
}
session_start();
if (isset($_SESSION['login']))
{  
	
   echo "<meta http-equiv='refresh' content='0; url=http://localhosthelp:8080/index.php'>";
    echo' <div class="word">Загрузка...</div> 
    <div class="overlay"></div>'; 
}
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>BufferHelpdesk</title>
<link href='css/style.css' rel='stylesheet'>
</head>
<body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400);

html,
body {
  height: 100%;
}

body {
  background: radial-gradient(#222922, #000500);
  font-family: "Source Code Pro", monospace;
  font-weight: 400;
  overflow: hidden;
  padding: 30px 0 0 30px;
  text-align: center;
}

.word {
  bottom: 0;
  color: #fff;
  font-size: 2.5em;
  height: 2.5em;
  left: 0;
  line-height: 2.5em;
  margin: auto;
  right: 0;
  position: absolute;
  text-shadow: 0 0 10px rgba(50, 255, 50, 0.5), 0 0 5px rgba(100, 255, 100, 0.5);
  top: 0
}

.word span {
  display: inline-block;
  transform: translateX(100%) scale(0.9);
  transition: transform 500ms;
}

.word .done {
  color: #6f6;
  transform: translateX(0) scale(1);
}

.overlay {
  background-image: linear-gradient(transparent 0%, rgba(10, 16, 10, 0.5) 50%);
  background-size: 1000px 2px;
  bottom: 0;
  content: '';
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
    </style>
<script>
    function Ticker( elem ) {
	elem.lettering();
	this.done = false;
	this.cycleCount = 5;
	this.cycleCurrent = 0;
	this.chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()-_=+{}|[]\\;\':"<>?,./`~'.split('');
	this.charsCount = this.chars.length;
	this.letters = elem.find( 'span' );
	this.letterCount = this.letters.length;
	this.letterCurrent = 0;

	this.letters.each( function() {
		var $this = $( this );
		$this.attr( 'data-orig', $this.text() );
		$this.text( '-' );
	});
}

Ticker.prototype.getChar = function() {
	return this.chars[ Math.floor( Math.random() * this.charsCount ) ];
};

Ticker.prototype.reset = function() {
	this.done = false;
	this.cycleCurrent = 0;
	this.letterCurrent = 0;
	this.letters.each( function() {
		var $this = $( this );
		$this.text( $this.attr( 'data-orig' ) );
		$this.removeClass( 'done' );
	});
	this.loop();
};

Ticker.prototype.loop = function()
{
	var self = this;

	this.letters.each( function( index, elem ) {
		var $elem = $( elem );
		if( index >= self.letterCurrent ) {
			if( $elem.text() !== ' ' ) {
				$elem.text( self.getChar() );
				$elem.css( 'opacity', Math.random() );
			}
		}
	});

	if( this.cycleCurrent < this.cycleCount ) {
		this.cycleCurrent++;
	} 
	else if( this.letterCurrent < this.letterCount ) 
	{
		var currLetter = this.letters.eq( this.letterCurrent );
		this.cycleCurrent = 0;
		currLetter.text( currLetter.attr( 'data-orig' ) ).css( 'opacity', 1 ).addClass( 'done' );
		this.letterCurrent++;
	}
	 else {
		this.done = true;
	}

	if( !this.done ) {
		requestAnimationFrame( function() {
			self.loop();
		});
	} else {
		setTimeout( function() {
			self.reset();
		}, 750 );
	}
};

$words = $( '.word' );

$words.each( function() {
	var $this = $( this ),
		ticker = new Ticker( $this ).reset();
	$this.data( 'ticker', ticker  );
});
</script>
</body>
</html>