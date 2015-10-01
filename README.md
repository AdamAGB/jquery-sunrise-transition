# jquery-sunrise-transition
Creates a sunrise-like animation by cross-fading two static images via jQuery.

This is a proof-of-concept, not meant for production code, but you can use it as inspiration to build your own transition effects.

Here's how it works:

You need two images, DAY and NIGHT. The NIGHT image is absolutely positioned beneath the DAY image.

(1)
The PHP code breaks the DAY image into 10 pixel high strips. The strips from middle to top have the class name "strip_top" and the strips from middle to bottom have the class name "strip_bottom"

(2)
The jQuery code fades out the DAY strips symmetrically starting from the middle. Since the horizon is in the middle, this creates the illusion of a sunrise.

Hope you enjoy!
