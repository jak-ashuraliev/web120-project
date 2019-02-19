<!--Include Header-->
<?php include 'includes/header.php' ; ?>

<!--LEFT COLUMN-->
<section>
    <h2>FLEXBOX</h2>
       <p><strong>Flexbox</strong> can rightly be called a successful attempt to solve a huge range of problems when building layouts in css. Any coder knows several ways to align anything vertically or make a 3 column layout with the middle column rubber. But let us recognize that all of these methods are rather strange and not suitable in all cases difficult to understand and do not work when the failure to comply with certain magical conditions that have evolved historically.</P>
       
       <p>In the beginning, web pages were similar to a single-threaded text documents, and later break the page into blocks did tables then became fashionable to impose float-s, and after the official death of ie6, and added another reception with inline-block. As a result, we have inherited a dangerous mix of all these techniques used to build layouts 99.9% of all existing web pages. The specification for CSS Flexible Box Layout Module (or Flexbox) is designed to cardinally change the situation in a better way in solving a huge number of tasks. Flexbox allows you to control the size, order and alignment of elements along multiple axes, the distribution of free space between the elements and more.</p>
       <br>
       <img src="images/flexbox-img.jpeg" alt="Flexbox layout displayed">
       <br>
       <p>According to <strong>Mozilla Developer Network</strong>, you can think of it as the <strong>Two Axes:</strong> 
When working with flexbox you need to think in terms of two axes — the main axis and the cross axis. The main axis is defined by the flex-direction property, and the cross axis runs perpendicular to it. Everything we do with flexbox refers back to these axes, so it is worth understanding how they work from the outset.</p>

        <p>When to use flexbox? Personally, I like to use flexbox for a few main things: scaling, vertically and horizontally aligning, and re-ordering elements within a container. These are best used on page components within a parent element. There are plenty of other uses for flexbox, like changing the direction of a column or row. But honestly, I prefer to use media-queries and percentage-based widths for creating columns and rows. Below are the rules you need to follow when implementing flexbox in your project.</p>
        
        <p><strong>Available values flex-direction:</strong></p>
        <ul>
            <li>row (default) : left to right (right to left in rtl)</li>
            <li>row-reverse: right to left (rtl left-to-right)</li>
            <li>column: top to bottom</li>
            <li>column-reverse: bottom to top</li>
        </ul>
        
        <p><strong>Available values justify-content:</strong></p>
        <ul>
            <li>flex-start (default) : blocks pressed to the beginning of the main axis</li>
            <li>flex-end: the blocks are pressed to the end of the main axis</li>
            <li>center: the blocks are located in the center of the main axis</li>
            <li>space-between: the first block is placed at the beginning of the main axis, the last block at the end, all the other blocks are evenly distributed in the remaining space.</li>
            <li>space-around: all the blocks are evenly distributed along the main axis, dividing the whole space equally.</li>
        </ul>
        
        <p><strong>Available values align-items:</strong></p>
        <ul>
            <li>flex-start: blocks pressed to the beginning of the transverse axis</li>
            <li>flex-end: the blocks are pressed to the end of the transverse axis</li>
            <li>center: the blocks are arranged in the center transverse axis</li>
            <li>baseline: blocks aligned on their baseline</li>
            <li>stretch (default) : blocks spaced out, taking up all available space on the transverse axis, while still considered min-width/max-width, if set.</li>
        </ul>
        
        <p>In conclusion, I think flexbox will not supplant all other methods of layout, but definitely in the near future will occupy a worthy niche in solving a huge number of tasks. You must know your project, audience, and the desired outcome and implement flexbox accordingly. Understand that you will still need to use some fallbacks for some of the older browsers, but it’s a very exciting piece of technology and a good indication of the evolution of modern web design.</p>
        
        <p>To have a better understanding or for more detailed instructions and tutorials, following resources might be very useful:</p>
        
        <p><strong><a href="https://medium.freecodecamp.org/flexbox-in-10-minutes-7295497804ed" target="_blank">Learn basic Flexbox in just 10 minutes</a></strong></p>
        
        <p><strong><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">Basic concepts of flexbox</a></strong></p>
</section>
<!--END LEFT COLUMN-->
   
<!--RIGHT COLUMN-->
<aside>
    <h3>OTHER RESOURCES:</h3>
    <hr>
    <div class="story-heading">
        <h4>Learn Basic Flexbox in Just 10 Minutes</h4>
        <img src="images/flexbox-banner.jpg" alt="Flexbox title with red background">
        <p>Flexbox, short for “flexible box,” is a layout mode introduced in CSS3 that determines how elements are arranged on a page so that they behave predictably under different screen sizes...<br><a href="https://medium.freecodecamp.org/flexbox-in-10-minutes-7295497804ed" target="_blank">Read more</a></p>
        <hr>
        <h4>Basic Concepts of Flexbox</h4>
        <img src="images/devices-addon.png" alt="Three devices">
        <p>The Flexible Box Module, usually referred to as flexbox, was designed as a one-dimensional layout model, and as a method that could offer space distribution between items in an interface and powerful alignment capabilities...<br><a href="https://mobirise.com/bootstrap-gallery/javascriptimagegallery.html?__c=1" target="_blank">Read more</a></p>
    </div>
    
    <hr>
    <h3>Work Cited:</h3>
    <blockquote>
        Justin, Yek. “Learn Basic Flexbox in Just 10 minutes", 24 May. 2017, <em>FreeCodeCamp</em><br>
        <a href="https://medium.freecodecamp.org/flexbox-in-10-minutes-7295497804ed" target="_blank"> Source link</a>
    </blockquote>
    <blockquote>
        MDN, “Basic Concepts of Flexbox” 6 Jan. 2019, <em>Mozilla Developer Network</em><br>
        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank"> Source link</a>
    </blockquote>
</aside>
<!--END RIGHT COLUMN-->
    
<!--Include Footer-->
<?php include 'includes/footer.php'; ?>