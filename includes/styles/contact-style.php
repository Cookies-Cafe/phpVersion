<?php 
$style =<<<_END
<style>
@import url('./fonts.css');
@import url('./styles.css');

.hero {
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/hero-contact.jpg') center no-repeat;
    background-size: cover;
}
</style>
_END;

echo $style;

?>