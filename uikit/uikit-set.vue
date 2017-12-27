<style>

//
// Component:       Variables
// Description:     Defines common values which are used across all components
//
// ========================================================================


// Breakpoints
// ========================================================================

// Phone Portrait:   Galaxy (360x640), iPhone 6 (375x667), iPhone 6+ (414x736)
// Phone Landscape:  Galaxy (640x360), iPhone 6 (667x375), iPhone 6+ (736x414)
// Tablet Portrait:  iPad (768x1024), Galaxy Tab (800x1280),
// Tablet Landscape: iPad (1024x768), iPad Pro (1024x1366),
// Desktop:          Galaxy Tab (1280x800), iPad Pro (1366x1024)

@breakpoint-small:                             640px;  // Phone landscape
@breakpoint-medium:                            960px;  // Tablet Landscape
@breakpoint-large:                             1200px; // Desktop
@breakpoint-xlarge:                            1600px; // Large Screens

@breakpoint-xsmall-max:                        (@breakpoint-small - 1);
@breakpoint-small-max:                         (@breakpoint-medium - 1);
@breakpoint-medium-max:                        (@breakpoint-large - 1);
@breakpoint-large-max:                         (@breakpoint-xlarge - 1);


// Global variables
// ========================================================================

//
// Typography
//

@global-font-family:                            -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
@global-font-size:                              16px;
@global-line-height:                            1.5;      // 24px

@global-xxlarge-font-size:                      2.625rem; // 42px
@global-xlarge-font-size:                       2rem;     // 32px
@global-large-font-size:                        1.5rem;   // 24px
@global-medium-font-size:                       1.25rem;  // 20px
@global-small-font-size:                        0.875rem; // 14px

//
// Colors
//

@global-color:                                  #666;
@global-emphasis-color:                         #333;
@global-muted-color:                            #999;

@global-link-color:                             #1e87f0;
@global-link-hover-color:                       #0f6ecd;

@global-inverse-color:                          #fff;

//
// Backgrounds
//

@global-background:                             #fff;

@global-muted-background:                       #f8f8f8;
@global-primary-background:                     #1e87f0;
@global-secondary-background:                   #222;

@global-success-background:                     #32d296;
@global-warning-background:                     #faa05a;
@global-danger-background:                      #f0506e;

//
// Borders
//

@global-border-width:                           1px;
@global-border:                                 #e5e5e5;

//
// Box-Shadows
//

@global-small-box-shadow:                       0 2px 8px rgba(0,0,0,0.08);
@global-medium-box-shadow:                      0 5px 15px rgba(0,0,0,0.08);
@global-large-box-shadow:                       0 14px 25px rgba(0,0,0,0.16);
@global-xlarge-box-shadow:                      0 28px 50px rgba(0,0,0,0.16);

//
// Spacings
//

// Used in margin, section, list
@global-margin:                                 20px;
@global-small-margin:                           10px;
@global-medium-margin:                          40px;
@global-large-margin:                           70px;
@global-xlarge-margin:                          140px;

// Used in grid, column, container, align, card, padding
@global-gutter:                                 30px;
@global-small-gutter:                           15px;
@global-medium-gutter:                          40px;
@global-large-gutter:                           70px;

//
// Controls
//

@global-control-height:                         40px;
@global-control-small-height:                   30px;
@global-control-large-height:                   55px;

//
// Z-index
//

@global-z-index:                                1000;
//
// Component:       Mixin
// Description:     Defines mixins which are used across all components
//
// ========================================================================


// SVG
// ========================================================================

.svg-fill(@src, @color-default, @color-new) {

    @escape-color-default: escape(@color-default);
    @escape-color-new: escape("@{color-new}");

    @data-uri: data-uri('image/svg+xml;charset=UTF-8', "@{src}");
    @replace-src: replace("@{data-uri}", "@{escape-color-default}", "@{escape-color-new}", "g");

    background-image: e(@replace-src);
}

// Name:            Base
// Description:     Default values for HTML elements
//
// Component:       `uk-link`
//                  `uk-h1`, `uk-h2`, `uk-h3`, `uk-h4`, `uk-h5`, `uk-h6`
//                  `uk-hr`
//
// ========================================================================


// Variables
// ========================================================================

@base-body-background:                          @global-background;
@base-body-font-family:                         @global-font-family;
@base-body-font-weight:                         normal;
@base-body-font-size:                           @global-font-size;
@base-body-line-height:                         @global-line-height;
@base-body-color:                               @global-color;

@base-link-color:                               @global-link-color;
@base-link-text-decoration:                     none;
@base-link-hover-color:                         @global-link-hover-color;
@base-link-hover-text-decoration:               underline;

@base-code-font-size:                           @global-small-font-size;
@base-code-font-family:                         Consolas, monaco, monospace;
@base-code-color:                               @global-danger-background;
@base-em-color:                                 @global-danger-background;
@base-ins-background:                           #ffd;
@base-ins-color:                                @global-color;
@base-mark-background:                          #ffd;
@base-mark-color:                               @global-color;
@base-quote-font-style:                         italic;
@base-small-font-size:                          80%;

@base-margin-vertical:                          @global-margin;

@base-heading-font-family:                      @global-font-family;
@base-heading-font-weight:                      normal;
@base-heading-color:                            @global-emphasis-color;
@base-heading-text-transform:                   none;
@base-heading-margin-top:                       @global-medium-margin;
@base-h1-font-size:                             @global-xxlarge-font-size;
@base-h1-line-height:                           1.2;
@base-h2-font-size:                             @global-xlarge-font-size;
@base-h2-line-height:                           1.3;
@base-h3-font-size:                             @global-large-font-size;
@base-h3-line-height:                           1.4;
@base-h4-font-size:                             @global-medium-font-size;
@base-h4-line-height:                           1.4;
@base-h5-font-size:                             @global-font-size;
@base-h5-line-height:                           1.4;
@base-h6-font-size:                             @global-small-font-size;
@base-h6-line-height:                           1.4;

@base-list-padding-left:                        30px;

@base-hr-margin-vertical:                       @global-margin;
@base-hr-border-width:                          @global-border-width;
@base-hr-border:                                @global-border;

@base-blockquote-font-size:                     @global-medium-font-size;
@base-blockquote-line-height:                   1.5;
@base-blockquote-font-style:                    italic;
@base-blockquote-margin-vertical:               @global-margin;
@base-blockquote-footer-margin-top:             @global-small-margin;
@base-blockquote-footer-font-size:              @global-small-font-size;
@base-blockquote-footer-line-height:            1.5;

@base-pre-font-size:                            @global-small-font-size;
@base-pre-line-height:                          1.5;
@base-pre-font-family:                          @base-code-font-family;
@base-pre-color:                                @global-color;

@base-selection-background:                     #39f;
@base-selection-color:                          @global-inverse-color;


/* ========================================================================
   Component: Base
 ========================================================================== */

/*
 * 1. Set `font-size` to support `rem` units
 *    Not using `font` property because a leading hyphen (e.g. -apple-system) causes the font to break in IE11 and Edge
 * 2. Prevent adjustments of font size after orientation changes in IE and iOS.
 * 3. Style
 */

html {
    /* 1 */
    font-family: @base-body-font-family;
    font-size: @base-body-font-size;
    font-weight: @base-body-font-weight;
    line-height: @base-body-line-height;
    /* 2 */
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    /* 3 */
    background: @base-body-background;
    color: @base-body-color;
    .hook-base-body;
}

/*
 * Removes default margin.
 */

body { margin: 0; }


/* Links
 ========================================================================== */

/*
 * Remove gaps in links underline in iOS 8+ and Safari 8+.
 */

a { -webkit-text-decoration-skip: objects; }

/*
 * Remove the outline on focused links when they are also active or hovered
 */

a:active,
a:hover { outline: none; }

/*
 * Style
 */

a,
.uk-link {
    color: @base-link-color;
    text-decoration: @base-link-text-decoration;
    cursor: pointer;
    .hook-base-link;
}

a:hover,
.uk-link:hover {
    color: @base-link-hover-color;
    text-decoration: @base-link-hover-text-decoration;
    .hook-base-link-hover;
}


/* Text-level semantics
 ========================================================================== */

/*
 * 1. Remove the bottom border in Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}


/*
 * 1. Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 * 2. Add the correct font weight in Chrome, Edge, and Safari.
 */

/* 1 */
b,
strong { font-weight: inherit; }

/* 2 */
b,
strong { font-weight: bolder; }

/*
 * 1. Correct the odd `em` font sizing in all browsers.
 * 2. Consolas has a better baseline in running text compared to `Courier`
 * 3. Style
 */

:not(pre) > code,
:not(pre) > kbd,
:not(pre) > samp {
    /* 1 */
    font-size: @base-code-font-size;
    /* 2 */
    font-family: @base-code-font-family;
    /* 3 */
    color: @base-code-color;
    white-space: nowrap;
    .hook-base-code;
}

/*
 * Emphasize
 */

em { color: @base-em-color; }

/*
 * Insert
 */

ins {
    background: @base-ins-background;
    color: @base-ins-color;
    text-decoration: none;
}

/*
 * Mark
 */

mark {
    background: @base-mark-background;
    color: @base-mark-color;
}

/*
 * Quote
 */

q { font-style: @base-quote-font-style; }

/*
 * Add the correct font size in all browsers.
 */

small { font-size: @base-small-font-size; }

/*
 * Prevents `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup { top: -0.5em; }
sub { bottom: -0.25em; }


/* Embedded content
 ========================================================================== */

/*
 * Remove the gap between embedded content and the bottom of their containers.
 */

audio,
canvas,
iframe,
img,
svg,
video { vertical-align: middle; }

/*
 * Responsiveness
 * 1. Set a maximum width
 * 2. Auto scale the height. Only needed if `height` attribute is present
 * 2. Corrects `max-width` behavior if padding and border are used
 */

audio,
canvas,
img,
video {
    /* 1 */
    max-width: 100%;
    /* 2 */
    height: auto;
    /* 3 */
    box-sizing: border-box;
}

/*
 * Hide the overflow in IE.
 */

svg:not(:root) { overflow: hidden; }


/* Block elements
 ========================================================================== */

/*
 * Margins
 */

p,
ul,
ol,
dl,
pre,
address,
fieldset,
figure { margin: 0 0 @base-margin-vertical 0; }

/* Add margin if adjacent element */
* + p,
* + ul,
* + ol,
* + dl,
* + pre,
* + address,
* + fieldset,
* + figure { margin-top: @base-margin-vertical; }


/* Headings
 ========================================================================== */

h1, .uk-h1,
h2, .uk-h2,
h3, .uk-h3,
h4, .uk-h4,
h5, .uk-h5,
h6, .uk-h6 {
    margin: 0 0 @base-margin-vertical 0;
    font-family: @base-heading-font-family;
    font-weight: @base-heading-font-weight;
    color: @base-heading-color;
    text-transform: @base-heading-text-transform;
    .hook-base-heading;
}

/* Add margin if adjacent element */
* + h1, * + .uk-h1,
* + h2, * + .uk-h2,
* + h3, * + .uk-h3,
* + h4, * + .uk-h4,
* + h5, * + .uk-h5,
* + h6, * + .uk-h6 { margin-top: @base-heading-margin-top; }

/*
 * Sizes
 */

h1, .uk-h1 {
    font-size: @base-h1-font-size;
    line-height: @base-h1-line-height;
    .hook-base-h1;
}

h2, .uk-h2 {
    font-size: @base-h2-font-size;
    line-height: @base-h2-line-height;
    .hook-base-h2;
}

h3, .uk-h3 {
    font-size: @base-h3-font-size;
    line-height: @base-h3-line-height;
    .hook-base-h3;
}

h4, .uk-h4 {
    font-size: @base-h4-font-size;
    line-height: @base-h4-line-height;
    .hook-base-h4;
}

h5, .uk-h5 {
    font-size: @base-h5-font-size;
    line-height: @base-h5-line-height;
    .hook-base-h5;
}

h6, .uk-h6 {
    font-size: @base-h6-font-size;
    line-height: @base-h6-line-height;
    .hook-base-h6;
}


/* Lists
 ========================================================================== */

ul,
ol { padding-left: @base-list-padding-left; }

/*
 * Reset margin for nested lists
 */

ul > li > ul,
ul > li > ol,
ol > li > ol,
ol > li > ul { margin: 0; }


/* Description lists
 ========================================================================== */

dt { font-weight: bold; }
dd { margin-left: 0; }


/* Horizontal rules
 ========================================================================== */

/*
 * 1. Add the correct box sizing and height in Firefox.
 * 2. Show the overflow in Edge and IE.
 * 3. Add the correct text-align in Edge and IE.
 * 4. Style
 */

hr, .uk-hr {
    /* 1 */
    box-sizing: content-box;
    height: 0;
    /* 2 */
    overflow: visible;
    /* 3 */
    text-align: inherit;
    /* 4 */
    margin: 0 0 @base-hr-margin-vertical 0;
    border: 0;
    border-top: @base-hr-border-width solid @base-hr-border;
    .hook-base-hr;
}

/* Add margin if adjacent element */
* + hr,
* + .uk-hr { margin-top: @base-hr-margin-vertical }


/* Address
 ========================================================================== */

address { font-style: normal; }


/* Blockquotes
 ========================================================================== */

blockquote {
    margin: 0 0 @base-blockquote-margin-vertical 0;
    font-size: @base-blockquote-font-size;
    line-height: @base-blockquote-line-height;
    font-style: @base-blockquote-font-style;
    .hook-base-blockquote;
}

/* Add margin if adjacent element */
* + blockquote { margin-top: @base-blockquote-margin-vertical; }

/*
 * Content
 */

blockquote p:last-of-type { margin-bottom: 0; }

blockquote footer {
    margin-top:  @base-blockquote-footer-margin-top;
    font-size: @base-blockquote-footer-font-size;
    line-height: @base-blockquote-footer-line-height;
    .hook-base-blockquote-footer;
}


/* Preformatted text
 ========================================================================== */

/*
 * 1. Contain overflow in all browsers.
 * 2. Override UA
 */

pre {
    font: @base-pre-font-size e("/") @base-pre-line-height @base-pre-font-family;
    color: @base-pre-color;
    -moz-tab-size: 4;
    tab-size: 4;
    /* 1 */
    overflow: auto;
    .hook-base-pre;
}

pre code { font-family: @base-pre-font-family; }


/* Selection pseudo-element
 ========================================================================== */

::-moz-selection {
    background: @base-selection-background;
    color: @base-selection-color;
    text-shadow: none;
}

::selection {
    background: @base-selection-background;
    color: @base-selection-color;
    text-shadow: none;
}


/* HTML5 elements
 ========================================================================== */

/*
 * 1. Add the correct display in Edge, IE, and Firefox.
 * 2. Add the correct display in IE.
 */

details, /* 1 */
main { /* 2 */
    display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary { display: list-item; }

/*
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress { vertical-align: baseline; }

/*
 * Add the correct display in IE.
 */

template { display: none; }


/* Iframe
 ========================================================================== */

iframe { border: 0; }


/* Prevent the 300ms delay for touchscreen interactions
 ========================================================================== */

/*
 * Most browsers prevent the 300ms delay automatically for sites that use the `width=device-width` property.
 * For Safari on iOS 9.3+, IE 11 and Edge on desktops and IE 11 on Windows Phone 8.1 it must be applied manually.
 */

a,
area,
button,
input,
label,
select,
summary,
textarea { touch-action: manipulation; }


/* Pass media breakpoints to JS
 ========================================================================== */

/*
 * Breakpoints
 */

.var-media-s::before  { content: '@{breakpoint-small}'; }
.var-media-m::before  { content: '@{breakpoint-medium}'; }
.var-media-l::before  { content: '@{breakpoint-large}'; }
.var-media-xl::before { content: '@{breakpoint-xlarge}'; }


// Hooks
// ========================================================================

.hook-base-misc;

.hook-base-body() {}
.hook-base-link() {}
.hook-base-link-hover() {}
.hook-base-code() {}
.hook-base-heading() {}
.hook-base-h1() {}
.hook-base-h2() {}
.hook-base-h3() {}
.hook-base-h4() {}
.hook-base-h5() {}
.hook-base-h6() {}
.hook-base-hr() {}
.hook-base-blockquote() {}
.hook-base-blockquote-footer() {}
.hook-base-pre() {}
.hook-base-misc() {}


// Inverse
// ========================================================================

@inverse-base-color:                           @inverse-global-color;
@inverse-base-link-color:                      @inverse-global-emphasis-color;
@inverse-base-link-hover-color:                @inverse-global-emphasis-color;
@inverse-base-code-color:                      @inverse-global-color;
@inverse-base-em-color:                        @inverse-global-emphasis-color;
@inverse-base-heading-color:                   @inverse-global-emphasis-color;
@inverse-base-hr-border:                       @inverse-global-border;

.hook-inverse() {

    color: @inverse-base-color;

    // Base
    // ========================================================================

    //
    // Link
    //

    a,
    .uk-link  {
        color: @inverse-base-link-color;
        .hook-inverse-base-link;
    }

    a:hover,
    .uk-link:hover {
        color: @inverse-base-link-hover-color;
        .hook-inverse-base-link-hover;
    }

    //
    // Code
    //

    :not(pre) > code,
    :not(pre) > kbd,
    :not(pre) > samp {
        color: @inverse-base-code-color;
        .hook-inverse-base-code;
    }

    //
    // Emphasize
    //

    em { color: @inverse-base-em-color; }

    //
    // Headings
    //

    h1, .uk-h1,
    h2, .uk-h2,
    h3, .uk-h3,
    h4, .uk-h4,
    h5, .uk-h5,
    h6, .uk-h6 {
        color: @inverse-base-heading-color;
        .hook-inverse-base-heading;
    }

    h1, .uk-h1 {
        .hook-inverse-base-h1;
    }

    h2, .uk-h2 {
        .hook-inverse-base-h2;
    }

    h3, .uk-h3 {
        .hook-inverse-base-h3;
    }

    h4, .uk-h4 {
        .hook-inverse-base-h4;
    }

    h5, .uk-h5 {
        .hook-inverse-base-h5;
    }

    h6, .uk-h6 {
        .hook-inverse-base-h6;
    }

    //
    // Blockquotes
    //

    blockquote {
        .hook-inverse-base-blockquote;
    }

    blockquote footer {
        .hook-inverse-base-blockquote-footer;
    }

    //
    // Horizontal rules
    //

    hr, .uk-hr {
        border-top-color: @inverse-base-hr-border;
        .hook-inverse-base-hr;
    }

}

.hook-inverse-base-link() {}
.hook-inverse-base-link-hover() {}
.hook-inverse-base-code() {}
.hook-inverse-base-heading() {}
.hook-inverse-base-h1() {}
.hook-inverse-base-h2() {}
.hook-inverse-base-h3() {}
.hook-inverse-base-h4() {}
.hook-inverse-base-h5() {}
.hook-inverse-base-h6() {}
.hook-inverse-base-blockquote() {}
.hook-inverse-base-blockquote-footer() {}
.hook-inverse-base-hr() {}

// Name:            Link
// Description:     Styles for links
//
// Component:       `uk-link-muted`
//                  `uk-link-text`
//                  `uk-link-reset`
//
// ========================================================================


// Variables
// ========================================================================

@link-muted-color:                              @global-muted-color;
@link-muted-hover-color:                        @global-color;

@link-text-hover-color:                         @global-muted-color;


/* ========================================================================
   Component: Link
 ========================================================================== */


/* Muted
 ========================================================================== */

a.uk-link-muted,
.uk-link-muted a {
    color: @link-muted-color;
    .hook-link-muted;
}

a.uk-link-muted:hover,
.uk-link-muted a:hover {
    color: @link-muted-hover-color;
    .hook-link-muted-hover;
}


/* Text
 ========================================================================== */

/*
 * `!important` needed to override inverse component
 */

a.uk-link-text:not(:hover),
.uk-link-text a:not(:hover) {
    color: inherit !important;
    .hook-link-text;
}

a.uk-link-text:hover,
.uk-link-text a:hover {
    color: @link-text-hover-color;
    .hook-link-text-hover;
}


/* Reset
 ========================================================================== */

/*
 * `!important` needed to override inverse component
 */

a.uk-link-reset,
a.uk-link-reset:hover,
.uk-link-reset a,
.uk-link-reset a:hover {
    color: inherit !important;
    text-decoration: none !important;
    .hook-link-reset;
}


// Hooks
// ========================================================================

.hook-link-misc;

.hook-link-muted() {}
.hook-link-muted-hover() {}
.hook-link-text() {}
.hook-link-text-hover() {}
.hook-link-reset() {}
.hook-link-misc() {}


// Inverse
// ========================================================================

@inverse-link-muted-color:                        @inverse-global-muted-color;
@inverse-link-muted-hover-color:                  @inverse-global-color;
@inverse-link-text-hover-color:                   @inverse-global-muted-color;

.hook-inverse() {

    a.uk-link-muted,
    .uk-link-muted a {
        color: @inverse-link-muted-color;
        .hook-inverse-link-muted;
    }

    a.uk-link-muted:hover,
    .uk-link-muted a:hover {
        color: @inverse-link-muted-hover-color;
        .hook-inverse-link-muted-hover;
    }

    a.uk-link-text:hover,
    .uk-link-text a:hover {
        color: @inverse-link-text-hover-color;
        .hook-inverse-link-text-hover;
    }

}

.hook-inverse-link-muted() {}
.hook-inverse-link-muted-hover() {}
.hook-inverse-link-text-hover() {}

// Name:            Heading
// Description:     Styles for headings
//
// Component:       `uk-heading-primary`
//                  `uk-heading-hero`
//                  `uk-heading-divider`
//                  `uk-heading-bullet`
//                  `uk-heading-line`
//
// ========================================================================


// Variables
// ========================================================================

@heading-primary-font-size:                     @global-xxlarge-font-size;
@heading-primary-line-height:                   1.2;

@heading-primary-font-size-m:                   3.75rem; // 54px
@heading-primary-line-height-m:                 1.1;

@heading-hero-font-size:                        4rem; // 64px
@heading-hero-line-height:                      1.1;

@heading-hero-font-size-s:                      6rem; // 96px
@heading-hero-line-height-s:                    1;

@heading-hero-font-size-m:                      8rem; // 128px
@heading-hero-line-height-m:                    1;

@heading-divider-padding-bottom:                10px;
@heading-divider-border-width:                  @global-border-width;
@heading-divider-border:                        @global-border;

@heading-bullet-top:                            ~'calc(-0.1 * 1em)';
@heading-bullet-height:                         0.9em;
@heading-bullet-margin-right:                   10px;
@heading-bullet-border-width:                   5px;
@heading-bullet-border:                         @global-border;

@heading-line-border-width:                     @global-border-width;
@heading-line-border:                           @global-border;
@heading-line-height:                           @heading-line-border-width;
@heading-line-margin-horizontal:                0.6em;


/* ========================================================================
   Component: Heading
 ========================================================================== */


/* Primary
 ========================================================================== */

.uk-heading-primary {
    font-size: @heading-primary-font-size;
    line-height: @heading-primary-line-height;
    .hook-heading-primary;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-heading-primary {
        font-size: @heading-primary-font-size-m;
        line-height: @heading-primary-line-height-m;
    }

}


/* Hero
 ========================================================================== */

.uk-heading-hero {
    font-size: @heading-hero-font-size;
    line-height: @heading-hero-line-height;
    .hook-heading-hero;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-heading-hero {
        font-size: @heading-hero-font-size-s;
        line-height: @heading-hero-line-height-s;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-heading-hero {
        font-size: @heading-hero-font-size-m;
        line-height: @heading-hero-line-height-m;
    }

}


/* Divider
 ========================================================================== */

.uk-heading-divider {
    padding-bottom: @heading-divider-padding-bottom;
    border-bottom: @heading-divider-border-width solid @heading-divider-border;
    .hook-heading-divider;
}


/* Bullet
 ========================================================================== */

.uk-heading-bullet { position: relative; }

/*
 * 1. Using `inline-block` to make it work with text alignment
 * 2. Center vertically
 * 3. Style
 */

.uk-heading-bullet::before {
    content: "";
    /* 1 */
    display: inline-block;
    /* 2 */
    position: relative;
    top: @heading-bullet-top;
    vertical-align: middle;
    /* 3 */
    height: @heading-bullet-height;
    margin-right: @heading-bullet-margin-right;
    border-left: @heading-bullet-border-width solid @heading-bullet-border;
    .hook-heading-bullet;
}


/* Line
 ========================================================================== */

/*
 * Clip the child element
 */

.uk-heading-line { overflow: hidden; }

/*
 * Extra markup is needed to make it work with text align
 */

.uk-heading-line > * {
    display: inline-block;
    position: relative;
}

/*
 * 1. Center vertically
 * 2. Make the element as large as possible. It's clipped by the container.
 * 3. Style
 */

.uk-heading-line > ::before,
.uk-heading-line > ::after {
    content: "";
    /* 1 */
    position: absolute;
    top: ~'calc(50% - (@{heading-line-height} / 2))';
    /* 2 */
    width: 2000px;
    /* 3 */
    border-bottom: @heading-line-border-width solid @heading-line-border;
    .hook-heading-line;
}

.uk-heading-line > ::before {
    right: 100%;
    margin-right: @heading-line-margin-horizontal;
}
.uk-heading-line > ::after {
    left: 100%;
    margin-left: @heading-line-margin-horizontal;
}


// Hooks
// ========================================================================

.hook-heading-misc;

.hook-heading-primary() {}
.hook-heading-hero() {}
.hook-heading-divider() {}
.hook-heading-bullet() {}
.hook-heading-line() {}
.hook-heading-misc() {}


// Inverse
// ========================================================================

@inverse-heading-divider-border:                  @inverse-global-border;
@inverse-heading-bullet-border:                   @inverse-global-border;
@inverse-heading-line-border:                     @inverse-global-border;

.hook-inverse() {

    .uk-heading-primary {
        .hook-inverse-heading-primary;
    }

    .uk-heading-hero {
        .hook-inverse-heading-hero;
    }

    .uk-heading-divider {
        border-bottom-color: @inverse-heading-divider-border;
        .hook-inverse-heading-divider;
    }

    .uk-heading-bullet::before {
        border-left-color: @inverse-heading-bullet-border;
        .hook-inverse-heading-bullet;
    }

    .uk-heading-line > ::before,
    .uk-heading-line > ::after {
        border-bottom-color: @inverse-heading-line-border;
        .hook-inverse-heading-line;
    }

}

.hook-inverse-heading-primary() {}
.hook-inverse-heading-hero() {}
.hook-inverse-heading-divider() {}
.hook-inverse-heading-bullet() {}
.hook-inverse-heading-line() {}

// Name:            Divider
// Description:     Styles for dividers
//
// Component:       `uk-divider-icon`
//                  `uk-divider-small`
//
// ========================================================================


// Variables
// ========================================================================

@divider-margin-vertical:                       @global-margin;

@divider-icon-width:                            50px;
@divider-icon-height:                           20px;
@divider-icon-color:                            @global-border;
@divider-icon-line-top:                         50%;
@divider-icon-line-width:                       100%;
@divider-icon-line-border-width:                @global-border-width;
@divider-icon-line-border:                      @global-border;

@internal-divider-icon-image:                   url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxjaXJjbGUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjIiIGN4PSIxMCIgY3k9IjEwIiByPSI3IiAvPgo8L3N2Zz4K");

@divider-small-width:                           100px;
@divider-small-border-width:                    @global-border-width;
@divider-small-border:                          @global-border;


/* ========================================================================
   Component: Divider
 ========================================================================== */

/*
 * 1. Reset default `hr`
 * 2. Set margin if a `div` is used for semantical reason
 */

[class*='uk-divider'] {
    /* 1 */
    border: none;
    /* 2 */
    margin-bottom: @divider-margin-vertical;
}

/* Add margin if adjacent element */
* + [class*='uk-divider'] { margin-top: @divider-margin-vertical; }


/* Icon
 ========================================================================== */

.uk-divider-icon {
    position: relative;
    height: @divider-icon-height;
    .svg-fill(@internal-divider-icon-image, "#000", @divider-icon-color);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    .hook-divider-icon;
}

.uk-divider-icon::before,
.uk-divider-icon::after {
    content: "";
    position: absolute;
    top: @divider-icon-line-top;
    max-width: ~'calc(50% - (@{divider-icon-width} / 2))';
    border-bottom: @divider-icon-line-border-width solid @divider-icon-line-border;
    .hook-divider-icon-line;
}

.uk-divider-icon::before {
    right: ~'calc(50% + (@{divider-icon-width} / 2))';
    width: @divider-icon-line-width;
    .hook-divider-icon-line-left;
}

.uk-divider-icon::after {
    left: ~'calc(50% + (@{divider-icon-width} / 2))';
    width: @divider-icon-line-width;
    .hook-divider-icon-line-right;
}


/* Small
 ========================================================================== */

/*
 * Reset child height, caused by `inline-block`
 */

.uk-divider-small { line-height: 0; }

.uk-divider-small::after {
    content: "";
    display: inline-block;
    width: @divider-small-width;
    max-width: 100%;
    border-top: @divider-small-border-width solid @divider-small-border;
    vertical-align: top;
    .hook-divider-small;
}


// Hooks
// ========================================================================

.hook-divider-misc;

.hook-divider-icon() {}
.hook-divider-icon-line() {}
.hook-divider-icon-line-left() {}
.hook-divider-icon-line-right() {}
.hook-divider-small() {}
.hook-divider-misc() {}


// Inverse
// ========================================================================

@inverse-divider-icon-color:                      @inverse-global-border;
@inverse-divider-icon-line-border:                @inverse-global-border;
@inverse-divider-small-border:                    @inverse-global-border;

.hook-inverse() {

    .uk-divider-icon {
        .svg-fill(@internal-divider-icon-image, "#000", @inverse-divider-icon-color);
        .hook-inverse-divider-icon;
    }

    .uk-divider-icon::before,
    .uk-divider-icon::after {
        border-bottom-color: @inverse-divider-icon-line-border;
        .hook-inverse-divider-icon-line;
    }

    .uk-divider-small::after {
        border-top-color: @inverse-divider-small-border;
        .hook-inverse-divider-small;
    }

}

.hook-inverse-divider-icon() {}
.hook-inverse-divider-icon-line() {}
.hook-inverse-divider-small() {}

// Name:            List
// Description:     Styles for lists
//
// Component:       `uk-list`
//
// Modifiers:       `uk-list-divider`
//                  `uk-list-striped`
//                  `uk-list-bullet`
//                  `uk-list-large`
//
// ========================================================================


// Variables
// ========================================================================

@list-margin-top:                               @global-small-margin;

@list-nested-padding-left:                      @global-gutter;

@list-divider-margin-top:                       @global-small-margin;
@list-divider-border-width:                     @global-border-width;
@list-divider-border:                           @global-border;

@list-striped-padding-vertical:                 @global-small-margin;
@list-striped-padding-horizontal:               @global-small-margin;
@list-striped-background:                       @global-muted-background;

@list-bullet-width:                             (@global-line-height * 1em);
@list-bullet-height:                            @list-bullet-width;
@list-bullet-margin-right:                      @global-small-margin;
@list-bullet-icon-color:                        @global-color;

@list-large-margin-top:                         @global-margin;
@list-large-divider-margin-top:                 @global-margin;
@list-large-striped-padding-vertical:           @global-margin;
@list-large-striped-padding-horizontal:         @global-small-margin;

@internal-list-bullet-image:                    url("data:image/svg;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSI2IiB2aWV3Qm94PSIwIDAgNiA2IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogICAgPGNpcmNsZSBmaWxsPSIjMDAwIiBjeD0iMyIgY3k9IjMiIHI9IjMiIC8+Cjwvc3ZnPg==");


/* ========================================================================
   Component: List
 ========================================================================== */

.uk-list {
    padding: 0;
    list-style: none;
}

/*
 * Micro clearfix
 */

.uk-list > li::before,
.uk-list > li::after {
    content: "";
    display: table;
}

.uk-list > li::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-list > li > :last-child { margin-bottom: 0; }

/*
 * Nested lists
 */

.uk-list ul {
    margin: 0;
    padding-left: @list-nested-padding-left;
    list-style: none;
}

/*
 * Style
 */

.uk-list > li:nth-child(n+2),
.uk-list > li > ul { margin-top: @list-margin-top; }


/* Style modifiers
 ========================================================================== */

/*
 * Divider
 */

.uk-list-divider > li:nth-child(n+2) {
    margin-top: @list-divider-margin-top;
    padding-top: @list-divider-margin-top;
    border-top: @list-divider-border-width solid @list-divider-border;
    .hook-list-divider;
}

/*
 * Striped
 */

.uk-list-striped > li {
    padding: @list-striped-padding-vertical @list-striped-padding-horizontal;
    .hook-list-striped;
}

.uk-list-striped > li:nth-of-type(odd) { background: @list-striped-background; }

.uk-list-striped > li:nth-child(n+2) { margin-top: 0; }

/*
 * Bullet
 */

.uk-list-bullet > li {
    position: relative;
    padding-left: ~'calc(@{list-bullet-width} + @{list-bullet-margin-right})';
}

.uk-list-bullet > li::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: @list-bullet-width;
    height: @list-bullet-height;
    .svg-fill(@internal-list-bullet-image, "#000", @list-bullet-icon-color);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    float: left;
    .hook-list-bullet;
}


/* Size modifier
 ========================================================================== */

.uk-list-large > li:nth-child(n+2),
.uk-list-large > li > ul { margin-top: @list-large-margin-top; }

/*
 * Divider
 */

.uk-list-large.uk-list-divider > li:nth-child(n+2) {
    margin-top: @list-large-divider-margin-top;
    padding-top: @list-large-divider-margin-top;
}

/*
 * Striped
 */

.uk-list-large.uk-list-striped > li {
    padding: @list-large-striped-padding-vertical @list-large-striped-padding-horizontal;
    .hook-list-striped;
}

.uk-list-large.uk-list-striped > li:nth-child(n+2) { margin-top: 0; }


// Hooks
// ========================================================================

.hook-list-misc;

.hook-list-divider() {}
.hook-list-striped() {}
.hook-list-bullet() {}
.hook-list-misc() {}


// Inverse
// ========================================================================

@inverse-list-divider-border:                     @inverse-global-border;
@inverse-list-striped-background:                 @inverse-global-muted-background;
@inverse-list-bullet-icon-color:                  @inverse-global-color;

.hook-inverse() {

    .uk-list-divider > li:nth-child(n+2) {
        border-top-color: @inverse-list-divider-border;
        .hook-inverse-list-divider;
    }

    .uk-list-striped > li {
        .hook-inverse-list-striped;
    }

    .uk-list-striped > li:nth-of-type(odd) { background-color: @inverse-list-striped-background; }

    .uk-list-bullet > li::before {
        .svg-fill(@internal-list-bullet-image, "#000", @inverse-list-bullet-icon-color);
        .hook-inverse-list-bullet;
    }

}

.hook-inverse-list-divider() {}
.hook-inverse-list-striped() {}
.hook-inverse-list-bullet() {}

// Name:            Description list
// Description:     Styles for description lists
//
// Component:       `uk-description-list`
//
// Modifiers:       `uk-description-list-divider`
//
// ========================================================================


// Variables
// ========================================================================

@description-list-term-color:                   @global-emphasis-color;
@description-list-term-margin-top:              @global-margin;

@description-list-divider-term-margin-top:      @global-margin;
@description-list-divider-term-border-width:    @global-border-width;
@description-list-divider-term-border:          @global-border;


/* ========================================================================
   Component: Description list
 ========================================================================== */

/*
 * Term
 */

.uk-description-list > dt {
    color: @description-list-term-color;
    .hook-description-list-term;
}

.uk-description-list > dt:nth-child(n+2) {
    margin-top: @description-list-term-margin-top;
}

/*
 * Description
 */

.uk-description-list > dd {
    .hook-description-list-description;
}


/* Style modifier
 ========================================================================== */

/*
 * Line
 */

.uk-description-list-divider > dt:nth-child(n+2) {
    margin-top: @description-list-divider-term-margin-top;
    padding-top: @description-list-divider-term-margin-top;
    border-top: @description-list-divider-term-border-width solid @description-list-divider-term-border;
    .hook-description-list-divider-term;
}


// Hooks
// ========================================================================

.hook-description-list-misc;

.hook-description-list-term() {}
.hook-description-list-description() {}
.hook-description-list-divider-term() {}
.hook-description-list-misc() {}
// Name:            Table
// Description:     Styles for tables
//
// Component:       `uk-table`
//
// Modifiers:       `uk-table-middle`
//                  `uk-table-divider`
//                  `uk-table-striped`
//                  `uk-table-hover`
//                  `uk-table-small`
//                  `uk-table-justify`
//                  `uk-table-shrink`
//                  `uk-table-expand`
//                  `uk-table-link`
//                  `uk-table-responsive`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@table-margin-vertical:                         @global-margin;

@table-cell-padding-vertical:                   16px;
@table-cell-padding-horizontal:                 12px;

@table-header-cell-font-size:                   @global-font-size;
@table-header-cell-font-weight:                 bold;
@table-header-cell-color:                       @global-color;

@table-footer-font-size:                        @global-small-font-size;

@table-caption-font-size:                       @global-small-font-size;
@table-caption-color:                           @global-muted-color;

@table-row-active-background:                   #ffd;

@table-divider-border-width:                    @global-border-width;
@table-divider-border:                          @global-border;

@table-striped-row-background:                  @global-muted-background;

@table-hover-row-background:                    @table-row-active-background;

@table-small-cell-padding-vertical:             10px;
@table-small-cell-padding-horizontal:           12px;

@table-expand-min-width:                        300px;


/* ========================================================================
   Component: Table
 ========================================================================== */

/*
 * 1. Remove most spacing between table cells.
 * 2. Behave like a block element
 * 3. Style
 */

.uk-table {
    /* 1 */
    border-collapse: collapse;
    border-spacing: 0;
    /* 2 */
    width: 100%;
    /* 3 */
    margin-bottom: @table-margin-vertical;
    .hook-table;
}

/* Add margin if adjacent element */
* + .uk-table { margin-top: @table-margin-vertical; }


/* Header cell
 ========================================================================== */

/*
 * 1. Style
 */

.uk-table th {
    padding: @table-cell-padding-vertical @table-cell-padding-horizontal;
    text-align: left;
    vertical-align: bottom;
    /* 1 */
    font-size: @table-header-cell-font-size;
    font-weight: @table-header-cell-font-weight;
    color: @table-header-cell-color;
    .hook-table-header-cell;
}


/* Cell
 ========================================================================== */

.uk-table td {
    padding: @table-cell-padding-vertical @table-cell-padding-horizontal;
    vertical-align: top;
    .hook-table-cell;
}

/*
 * Remove margin from the last-child
 */

.uk-table td > :last-child { margin-bottom: 0; }


/* Footer
 ========================================================================== */

.uk-table tfoot {
    font-size: @table-footer-font-size;
    .hook-table-footer;
}


/* Caption
 ========================================================================== */

.uk-table caption {
    font-size: @table-caption-font-size;
    text-align: left;
    color: @table-caption-color;
    .hook-table-caption;
}


/* Row
 ========================================================================== */

.uk-table > tr.uk-active,
.uk-table tbody tr.uk-active {
    background: @table-row-active-background;
    .hook-table-row-active;
}


/* Alignment modifier
 ========================================================================== */

.uk-table-middle,
.uk-table-middle td { vertical-align: middle !important; }


/* Style modifiers
 ========================================================================== */

/*
 * Divider
 */

.uk-table-divider > tr:not(:first-child),
.uk-table-divider > :not(:first-child) > tr,
.uk-table-divider > :first-child > tr:not(:first-child) {
    border-top: @table-divider-border-width solid @table-divider-border;
    .hook-table-divider;
}

/*
 * Striped
 */

.uk-table-striped > tr:nth-of-type(odd),
.uk-table-striped tbody tr:nth-of-type(odd) {
    background: @table-striped-row-background;
    .hook-table-striped;
}

/*
 * Hover
 */

.uk-table-hover > tr:hover,
.uk-table-hover tbody tr:hover {
    background: @table-hover-row-background;
    .hook-table-hover;
}


/* Size modifier
 ========================================================================== */

.uk-table-small th,
.uk-table-small td {
    padding: @table-small-cell-padding-vertical @table-small-cell-padding-horizontal;
    .hook-table-small;
}


/* Justify modifier
 ========================================================================== */

.uk-table-justify th:first-child,
.uk-table-justify td:first-child { padding-left: 0; }

.uk-table-justify th:last-child,
.uk-table-justify td:last-child { padding-right: 0; }


/* Cell size modifier
 ========================================================================== */

.uk-table-shrink { width: 1px; }
.uk-table-expand { min-width: @table-expand-min-width; }


/* Cell link modifier
 ========================================================================== */

/*
 * Does not work with `uk-table-justify` at the moment
 */

.uk-table-link { padding: 0 !important; }

.uk-table-link > a {
    display: block;
    padding: @table-cell-padding-vertical @table-cell-padding-horizontal;
}

.uk-table-small .uk-table-link > a { padding: @table-small-cell-padding-vertical @table-small-cell-padding-horizontal; }


/* Responsive table
 ========================================================================== */


/* Phone landscape and smaller */
@media (max-width: @breakpoint-small-max) {

    .uk-table-responsive,
    .uk-table-responsive tbody,
    .uk-table-responsive th,
    .uk-table-responsive td,
    .uk-table-responsive tr { display: block; }

    .uk-table-responsive thead { display: none; }

    .uk-table-responsive th,
    .uk-table-responsive td {
        width: auto !important;
        max-width: none !important;
        min-width: 0 !important;
        overflow: visible !important;
        white-space: normal !important;
    }

    .uk-table-responsive th:not(:first-child):not(.uk-table-link),
    .uk-table-responsive td:not(:first-child):not(.uk-table-link),
    .uk-table-responsive .uk-table-link:not(:first-child) > a { padding-top: round(@table-cell-padding-vertical / 3) !important; }

    .uk-table-responsive th:not(:last-child):not(.uk-table-link),
    .uk-table-responsive td:not(:last-child):not(.uk-table-link),
    .uk-table-responsive .uk-table-link:not(:last-child) > a { padding-bottom: round(@table-cell-padding-vertical / 3) !important; }

    .uk-table-justify.uk-table-responsive th,
    .uk-table-justify.uk-table-responsive td {
        padding-left: 0;
        padding-right: 0;
    }

}


// Hooks
// ========================================================================

.hook-table-misc;

.hook-table() {}
.hook-table-header-cell() {}
.hook-table-cell() {}
.hook-table-footer() {}
.hook-table-caption() {}
.hook-table-row-active() {}
.hook-table-divider() {}
.hook-table-striped() {}
.hook-table-hover() {}
.hook-table-small() {}
.hook-table-misc() {}


// Inverse
// ========================================================================

@inverse-table-header-cell-color:                       @inverse-global-color;
@inverse-table-caption-color:                           @inverse-global-muted-color;
@inverse-table-row-active-background:                   fadeout(@inverse-global-muted-background, 2%);
@inverse-table-divider-border:                          @inverse-global-border;
@inverse-table-striped-row-background:                  @inverse-global-muted-background;
@inverse-table-hover-row-background:                    @inverse-table-row-active-background;

.hook-inverse() {

    .uk-table th {
        color: @inverse-table-header-cell-color;
        .hook-inverse-table-header-cell;
    }

    .uk-table caption {
        color: @inverse-table-caption-color;
        .hook-inverse-table-caption;
    }

    .uk-table > tr.uk-active,
    .uk-table tbody tr.uk-active {
        background: @inverse-table-row-active-background;
        .hook-inverse-table-row-active;
    }

    .uk-table-divider > tr:not(:first-child),
    .uk-table-divider > :not(:first-child) > tr,
    .uk-table-divider > :first-child > tr:not(:first-child) {
        border-top-color: @inverse-table-divider-border;
        .hook-inverse-table-divider;
    }

    .uk-table-striped > tr:nth-of-type(odd),
    .uk-table-striped tbody tr:nth-of-type(odd) {
        background: @inverse-table-striped-row-background;
        .hook-inverse-table-striped;
    }

    .uk-table-hover > tr:hover,
    .uk-table-hover tbody tr:hover {
        background: @inverse-table-hover-row-background;
        .hook-inverse-table-hover;
    }

}

.hook-inverse-table-header-cell() {}
.hook-inverse-table-caption() {}
.hook-inverse-table-row-active() {}
.hook-inverse-table-divider() {}
.hook-inverse-table-striped() {}
.hook-inverse-table-hover() {}
// Name:            Icon
// Description:     Component to create icons
//
// Component:       `uk-icon`
//
// Modifiers:       `uk-icon-image`
//                  `uk-icon-link`
//                  `uk-icon-button`
//
// States:          `uk-preserve`
//
// ========================================================================


// Variables
// ========================================================================

@icon-image-size:                               20px;

@icon-link-color:                               @global-muted-color;
@icon-link-hover-color:                         @global-color;
@icon-link-active-color:                        darken(@global-color, 5%);

@icon-button-size:                              36px;
@icon-button-border-radius:                     500px;
@icon-button-background:                        @global-muted-background;
@icon-button-color:                             @global-muted-color;

@icon-button-hover-background:                  darken(@icon-button-background, 5%);
@icon-button-hover-color:                       @global-color;

@icon-button-active-background:                 darken(@icon-button-background, 10%);
@icon-button-active-color:                      @global-color;


/* ========================================================================
   Component: Icon
 ========================================================================== */

/*
 * Note: 1. - 7. is required for `button` elements. Needed for Close and Form Icon component.
 * 1. Remove margins in Chrome, Safari and Opera.
 * 2. Remove borders for `button`.
 * 3. Remove border-radius in Chrome.
 * 4. Address `overflow` set to `hidden` in IE.
 * 5. Correct `font` properties and `color` not being inherited for `button`.
 * 6. Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 7. Remove default `button` padding and background color
 * 8. Style
 * 9. Fill all SVG elements with the current text color if no `fill` attribute is set
 * 10. Let the container fit the height of the icon
 */

.uk-icon {
    /* 1 */
    margin: 0;
    /* 2 */
    border: none;
    /* 3 */
    border-radius: 0;
    /* 4 */
    overflow: visible;
    /* 5 */
    font: inherit;
    color: inherit;
    /* 6 */
    text-transform: none;
    /* 7. */
    padding: 0;
    background-color: transparent;
    /* 8 */
    display: inline-block;
    /* 9 */
    fill: currentcolor;
    /* 10 */
    line-height: 0;
}

/* Required for `button`. */
button.uk-icon:not(:disabled) { cursor: pointer; }

/*
 * Remove the inner border and padding in Firefox.
 */

.uk-icon::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/*
 * Set the fill and stroke color of all SVG elements to the current text color
 * 1. Fix for uppercase attribute names in Edge. Will be fixed in Windows 10 builds 16251+
 */

.uk-icon [fill*='#']:not(.uk-preserve),
.uk-icon [FILL*='#']:not(.uk-preserve) { fill: currentcolor; } // 1
.uk-icon [stroke*='#']:not(.uk-preserve),
.uk-icon [STROKE*='#']:not(.uk-preserve) { stroke: currentcolor; } // 1

/*
 * Fix Firefox blurry SVG rendering: https://bugzilla.mozilla.org/show_bug.cgi?id=1046835
 */

.uk-icon > * { transform: translate(0,0); }


/* Image modifier
 ========================================================================== */

/*
 * Display images in icon dimensions
 */

.uk-icon-image {
    width: @icon-image-size;
    height: @icon-image-size;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    vertical-align: middle;
}


/* Style modifiers
 ========================================================================== */

/*
 * Link
 */

.uk-icon-link {
    color: @icon-link-color;
    .hook-icon-link;
}

.uk-icon-link:hover,
.uk-icon-link:focus {
    color: @icon-link-hover-color;
    outline: none;
    .hook-icon-link-hover;
}

/* OnClick + Active */
.uk-icon-link:active,
.uk-active > .uk-icon-link {
    color: @icon-link-active-color;
    .hook-icon-link-active;
}

/*
 * Button
 * 1. Center icon vertically and horizontally
 */

.uk-icon-button {
    box-sizing: border-box;
    width: @icon-button-size;
    height: @icon-button-size;
    border-radius: @icon-button-border-radius;
    background: @icon-button-background;
    color: @icon-button-color;
    vertical-align: middle;
    /* 1 */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    .hook-icon-button;
}

/* Hover + Focus */
.uk-icon-button:hover,
.uk-icon-button:focus {
    background-color: @icon-button-hover-background;
    color: @icon-button-hover-color;
    outline: none;
    .hook-icon-button-hover;
}

/* OnClick + Active */
.uk-icon-button:active,
.uk-active > .uk-icon-button {
    background-color: @icon-button-active-background;
    color: @icon-button-active-color;
    .hook-icon-button-active;
}


// Hooks
// ========================================================================

.hook-icon-misc;

.hook-icon-link() {}
.hook-icon-link-hover() {}
.hook-icon-link-active() {}
.hook-icon-button() {}
.hook-icon-button-hover() {}
.hook-icon-button-active() {}
.hook-icon-misc() {}


// Inverse
// ========================================================================

@inverse-icon-link-color:                      @inverse-global-muted-color;
@inverse-icon-link-hover-color:                @inverse-global-color;
@inverse-icon-link-active-color:               @inverse-global-color;
@inverse-icon-button-background:               @inverse-global-muted-background;
@inverse-icon-button-color:                    @inverse-global-muted-color;
@inverse-icon-button-hover-background:         darken(@inverse-icon-button-background, 5%);
@inverse-icon-button-hover-color:              @inverse-global-color;
@inverse-icon-button-active-background:        darken(@inverse-icon-button-background, 10%);
@inverse-icon-button-active-color:             @inverse-global-color;

.hook-inverse() {

    //
    // Link
    //

    .uk-icon-link {
        color: @inverse-icon-link-color;
        .hook-inverse-icon-link;
    }

    .uk-icon-link:hover,
    .uk-icon-link:focus {
        color: @inverse-icon-link-hover-color;
        .hook-inverse-icon-link-hover;
    }

    .uk-icon-link:active,
    .uk-active > .uk-icon-link {
        color: @inverse-icon-link-active-color;
        .hook-inverse-icon-link-active;
    }

    //
    // Button
    //

    .uk-icon-button {
        background-color: @inverse-icon-button-background;
        color: @inverse-icon-button-color;
        .hook-inverse-icon-button;
    }

    .uk-icon-button:hover,
    .uk-icon-button:focus {
        background-color: @inverse-icon-button-hover-background;
        color: @inverse-icon-button-hover-color;
        .hook-inverse-icon-button-hover;
    }

    .uk-icon-button:active {
        background-color: @inverse-icon-button-active-background;
        color: @inverse-icon-button-active-color;
        .hook-inverse-icon-button-active;
    }

}

.hook-inverse-icon-link() {}
.hook-inverse-icon-link-hover() {}
.hook-inverse-icon-link-active() {}
.hook-inverse-icon-button() {}
.hook-inverse-icon-button-hover() {}
.hook-inverse-icon-button-active() {}

// Name:            Form Range
// Description:     Styles for the range input type
//
// Component:       `uk-range`
//
// ========================================================================


// Variables
// ========================================================================

@form-range-thumb-height:                       15px;
@form-range-thumb-border-radius:                500px;
@form-range-thumb-background:                   @global-color;

@form-range-track-height:                       3px;
@form-range-track-background:                   darken(@global-muted-background, 5%);
@form-range-track-focus-background:             darken(@global-muted-background, 15%);


/* ========================================================================
   Component: Form Range
 ========================================================================== */

/*
 * 1. Normalize and defaults
 * 2. Prevent content overflow if a fixed width is used
 * 3. Take the full width
 * 4. Remove default style
 * 5. Remove white background in Chrome
 * 6. Remove padding in IE11
 */

.uk-range {
    /* 1 */
    box-sizing: border-box;
    margin: 0;
    vertical-align: middle;
    /* 2 */
    max-width: 100%;
    /* 3 */
    width: 100%;
    /* 4 */
    -webkit-appearance: none;
    /* 5 */
    background: transparent;
    /* 6 */
    padding: 0;
    .hook-form-range;
}

/* Focus */
.uk-range:focus { outline: none; }
.uk-range::-moz-focus-outer { border: none; }

/* IE11 Reset */
.uk-range::-ms-track {
    height: @form-range-thumb-height;
    background: transparent;
    border-color: transparent;
    color: transparent;
}

/*
 * Improves consistency of cursor style for clickable elements
 */

.uk-range:not(:disabled)::-webkit-slider-thumb { cursor: pointer; }
.uk-range:not(:disabled)::-moz-range-thumb { cursor: pointer; }
.uk-range:not(:disabled)::-ms-thumb { cursor: pointer; }


/* Thumb
 ========================================================================== */

/*
 * 1. Reset
 * 2. Style
 */

/* Webkit */
.uk-range::-webkit-slider-thumb {
    /* 1 */
    -webkit-appearance: none;
    margin-top: (floor(@form-range-thumb-height / 2) * -1);
    /* 2 */
    height: @form-range-thumb-height;
    width: @form-range-thumb-height;
    border-radius: @form-range-thumb-border-radius;
    background: @form-range-thumb-background;
    .hook-form-range-thumb;
}

/* Firefox */
.uk-range::-moz-range-thumb {
    /* 1 */
    border: none;
    /* 2 */
    height: @form-range-thumb-height;
    width: @form-range-thumb-height;
    border-radius: @form-range-thumb-border-radius;
    background: @form-range-thumb-background;
    .hook-form-range-thumb;
}

/* Edge */
.uk-range::-ms-thumb {
    /* 1 */
    margin-top: 0;
}

/* IE11 */
.uk-range::-ms-thumb {
    /* 1 */
    border: none;
    /* 2 */
    height: @form-range-thumb-height;
    width: @form-range-thumb-height;
    border-radius: @form-range-thumb-border-radius;
    background: @form-range-thumb-background;
    .hook-form-range-thumb;
}

/* Edge + IE11 */
.uk-range::-ms-tooltip { display: none; }


/* Track
 ========================================================================== */

/*
 * 1. Safari doesn't have a focus state. Using active instead.
 */

/* Webkit */
.uk-range::-webkit-slider-runnable-track {
    height: @form-range-track-height;
    background: @form-range-track-background;
    .hook-form-range-track;
}

.uk-range:focus::-webkit-slider-runnable-track,
/* 1 */
.uk-range:active::-webkit-slider-runnable-track {
    background: @form-range-track-focus-background;
    .hook-form-range-track-focus;
}

/* Firefox */
.uk-range::-moz-range-track {
    height: @form-range-track-height;
    background: @form-range-track-background;
    .hook-form-range-track;
}

.uk-range:focus::-moz-range-track {
    background: @form-range-track-focus-background;
    .hook-form-range-track-focus;
}

/* Edge */
.uk-range::-ms-fill-lower,
.uk-range::-ms-fill-upper {
    height: @form-range-track-height;
    background: @form-range-track-background;
    .hook-form-range-track;
}

.uk-range:focus::-ms-fill-lower,
.uk-range:focus::-ms-fill-upper {
    background: @form-range-track-focus-background;
    .hook-form-range-track-focus;
}


// Hooks
// ========================================================================

.hook-form-range-misc;

.hook-form-range() {}
.hook-form-range-thumb() {}
.hook-form-range-track() {}
.hook-form-range-track-focus() {}
.hook-form-range-misc() {}

// Name:            Form
// Description:     Styles for forms
//
// Component:       `uk-form-*`
//                  `uk-input`
//                  `uk-select`
//                  `uk-textarea`
//                  `uk-radio`
//                  `uk-checkbox`
//                  `uk-legend`
//                  `uk-fieldset`
//
// Sub-objects:     `uk-form-custom`
//                  `uk-form-stacked`
//                  `uk-form-horizontal`
//                  `uk-form-label`
//                  `uk-form-controls`
//                  `uk-form-icon`
//                  `uk-form-icon-flip`
//
// Modifiers:       `uk-form-small`
//                  `uk-form-large`
//                  `uk-form-danger`
//                  `uk-form-success`
//                  `uk-form-blank`
//                  `uk-form-width-xsmall`
//                  `uk-form-width-small`
//                  `uk-form-width-medium`
//                  `uk-form-width-large`
//                  `uk-form-controls-text`
//
// ========================================================================


// Variables
// ========================================================================

@form-height:                                   @global-control-height;
@form-line-height:                              @form-height;
@form-padding-horizontal:                       10px;
@form-padding-vertical:                         4px;

@form-background:                               @global-muted-background;
@form-color:                                    @global-color;

@form-focus-background:                         @global-muted-background;
@form-focus-color:                              @global-color;

@form-disabled-background:                      @global-muted-background;
@form-disabled-color:                           @global-muted-color;

@form-placeholder-color:                        @global-muted-color;

@form-small-height:                             @global-control-small-height;
@form-small-padding-horizontal:                 8px;
@form-small-line-height:                        @form-small-height;
@form-small-font-size:                          @global-small-font-size;

@form-large-height:                             @global-control-large-height;
@form-large-padding-horizontal:                 12px;
@form-large-line-height:                        @form-large-height;
@form-large-font-size:                          @global-medium-font-size;

@form-danger-color:                             @global-danger-background;
@form-success-color:                            @global-success-background;

@form-width-xsmall:                             50px;
@form-width-small:                              130px;
@form-width-medium:                             200px;
@form-width-large:                              500px;

@form-select-padding-right:                     20px;
@form-select-icon-color:                        @global-color;
@form-select-disabled-icon-color:               @global-muted-color;

@form-radio-size:                               16px;
@form-radio-margin-top:                         -4px;
@form-radio-background:                         darken(@global-muted-background, 5%);

@form-radio-checked-background:                 @global-primary-background;
@form-radio-checked-icon-color:                 @global-inverse-color;

@form-radio-checked-focus-background:           darken(@global-primary-background, 10%);

@form-radio-disabled-background:                @global-muted-background;
@form-radio-disabled-icon-color:                @global-muted-color;

@form-legend-font-size:                         @global-large-font-size;
@form-legend-line-height:                       1.4;

@form-stacked-margin-bottom:                    @global-small-margin;

@form-horizontal-label-width:                   200px;
@form-horizontal-label-margin-top:              7px;
@form-horizontal-controls-margin-left:          215px;
@form-horizontal-controls-text-padding-top:     7px;

@form-icon-width:                               @form-height;
@form-icon-font-size:                           @global-font-size;
@form-icon-color:                               @global-muted-color;
@form-icon-hover-color:                         @global-color;

@internal-form-select-image:                     url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAyNCAxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwb2x5Z29uIGZpbGw9IiMwMDAiIHBvaW50cz0iMTIgMSA5IDYgMTUgNiIgLz4KICAgIDxwb2x5Z29uIGZpbGw9IiMwMDAiIHBvaW50cz0iMTIgMTMgOSA4IDE1IDgiIC8+Cjwvc3ZnPgo=");
@internal-form-radio-image:                      url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjgiIGN5PSI4IiByPSIyIiAvPgo8L3N2Zz4=");
@internal-form-checkbox-image:                   url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxNCAxMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwb2x5Z29uIGZpbGw9IiMwMDAiIHBvaW50cz0iMTIgMSA1IDcuNSAyIDUgMSA1LjUgNSAxMCAxMyAxLjUiLz4KPC9zdmc+");
@internal-form-checkbox-indeterminate-image:     url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxyZWN0IGZpbGw9IiMwMDAiIHg9IjMiIHk9IjgiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxIiAvPgo8L3N2Zz4=");


/* ========================================================================
   Component: Form
 ========================================================================== */

/*
 * 1. Define consistent box sizing.
 *    Default is `content-box` with following exceptions set to `border-box`
 *    `select`, `input[type="checkbox"]` and `input[type="radio"]`
 *    `input[type="search"]` in Chrome, Safari and Opera
 *    `input[type="color"]` in Firefox
 * 2. Address margins set differently in Firefox/IE and Chrome/Safari/Opera.
 * 3. Remove `border-radius` in iOS.
 * 4. Change font properties to `inherit` in all browsers
 */

.uk-input,
.uk-select,
.uk-textarea,
.uk-radio,
.uk-checkbox {
    /* 1 */
    box-sizing: border-box;
    /* 2 */
    margin: 0;
    /* 3 */
    border-radius: 0;
    /* 4 */
    font: inherit;
}

/*
 * Show the overflow in Edge.
 */

.uk-input { overflow: visible; }

/*
 * Remove the inheritance of text transform in Firefox.
 */

.uk-select { text-transform: none; }

/*
 * 1. Change font properties to `inherit` in all browsers
 * 2. Don't inherit the `font-weight` and use `bold` instead.
 * NOTE: Both declarations don't work in Chrome, Safari and Opera.
 */

.uk-select optgroup {
    /* 1 */
    font: inherit;
    /* 2 */
    font-weight: bold;
}

/*
 * Remove the default vertical scrollbar in IE.
 */

.uk-textarea { overflow: auto; }

/*
 * Remove the inner padding and cancel buttons in Chrome on OS X and Safari on OS X.
 */

.uk-input[type="search"]::-webkit-search-cancel-button,
.uk-input[type="search"]::-webkit-search-decoration { -webkit-appearance: none; }


/*
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

.uk-input[type="number"]::-webkit-inner-spin-button,
.uk-input[type="number"]::-webkit-outer-spin-button { height: auto; }

/*
 * Removes placeholder transparency in Firefox.
 */

.uk-input::-moz-placeholder,
.uk-textarea::-moz-placeholder { opacity: 1; }

/*
 * Improves consistency of cursor style for clickable elements
 */

.uk-radio:not(:disabled),
.uk-checkbox:not(:disabled) { cursor: pointer; }

/*
 * Define consistent border, margin, and padding.
 */

.uk-fieldset {
    border: none;
    margin: 0;
    padding: 0;
}


/* Input, select and textarea
 * Allowed: `text`, `password`, `datetime`, `datetime-local`, `date`,  `month`,
            `time`, `week`, `number`, `email`, `url`, `search`, `tel`, `color`
 * Disallowed: `range`, `radio`, `checkbox`, `file`, `submit`, `reset` and `image`
 ========================================================================== */

/*
 * Remove default style in iOS.
 */

.uk-input,
.uk-textarea { -webkit-appearance: none; }

/*
 * 1. Prevent content overflow if a fixed width is used
 * 2. Take the full width
 * 3. Reset default
 * 4. Style
 */

.uk-input,
.uk-select,
.uk-textarea {
    /* 1 */
    max-width: 100%;
    /* 2 */
    width: 100%;
    /* 3 */
    border: 0 none;
    /* 4 */
    padding: 0 @form-padding-horizontal;
    background: @form-background;
    color: @form-color;
    .hook-form;
}

/*
 * Single-line
 * 1. Allow any element to look like an `input` or `select` element
 * 2. Make sure line-height is not larger than height
 *    Also needed to center the text vertically
 */

.uk-input,
.uk-select:not([multiple]):not([size]) {
    height: @form-height;
    vertical-align: middle;
    /* 1 */
    display: inline-block;
    .hook-form-single-line;
}

/* 2 */
.uk-input:not(input),
.uk-select:not(select) { line-height: @form-line-height; }

/*
 * Multi-line
 */

.uk-select[multiple],
.uk-select[size],
.uk-textarea {
    padding-top: @form-padding-vertical;
    padding-bottom: @form-padding-vertical;
    vertical-align: top;
    .hook-form-multi-line;
}

/* Focus */
.uk-input:focus,
.uk-select:focus,
.uk-textarea:focus {
    outline: none;
    background-color: @form-focus-background;
    color: @form-focus-color;
    .hook-form-focus;
}

/* Disabled */
.uk-input:disabled,
.uk-select:disabled,
.uk-textarea:disabled {
    background-color: @form-disabled-background;
    color: @form-disabled-color;
    .hook-form-disabled;
}

/*
 * Placeholder
 */

.uk-input:-ms-input-placeholder { color: @form-placeholder-color !important; }
.uk-input::placeholder { color: @form-placeholder-color; }

.uk-textarea:-ms-input-placeholder { color: @form-placeholder-color !important; }
.uk-textarea::placeholder { color: @form-placeholder-color; }


/* Style modifier (`uk-input`, `uk-select` and `uk-textarea`)
 ========================================================================== */

/*
 * Small
 */

.uk-form-small { font-size: @form-small-font-size; }

.uk-form-small:not(textarea):not([multiple]):not([size]) {
    height: @form-small-height;
    padding-left: @form-small-padding-horizontal;
    padding-right: @form-small-padding-horizontal;
}

.uk-form-small:not(select):not(input):not(textarea) { line-height: @form-small-line-height; }

/*
 * Large
 */

.uk-form-large { font-size: @form-large-font-size; }

.uk-form-large:not(textarea):not([multiple]):not([size]) {
    height: @form-large-height;
    padding-left: @form-large-padding-horizontal;
    padding-right: @form-large-padding-horizontal;
}

.uk-form-large:not(select):not(input):not(textarea) { line-height: @form-large-line-height; }


/* Style modifier (`uk-input`, `uk-select` and `uk-textarea`)
 ========================================================================== */

/*
 * Error
 */

.uk-form-danger,
.uk-form-danger:focus {
    color: @form-danger-color;
    .hook-form-danger;
}

/*
 * Success
 */

.uk-form-success,
.uk-form-success:focus  {
    color: @form-success-color;
    .hook-form-success;
}

/*
 * Blank
 */

.uk-form-blank {
    background: none;
    .hook-form-blank;
}

.uk-form-blank:focus {
    .hook-form-blank-focus;
}


/* Width modifiers (`uk-input`, `uk-select` and `uk-textarea`)
 ========================================================================== */

/*
 * Fixed widths
 * Different widths for mini sized `input` and `select` elements
 */

input.uk-form-width-xsmall { width: @form-width-xsmall; }

select.uk-form-width-xsmall { width: (@form-width-xsmall + 25px); }

.uk-form-width-small { width: @form-width-small; }

.uk-form-width-medium { width: @form-width-medium; }

.uk-form-width-large { width: @form-width-large; }


/* Select
 ========================================================================== */

/*
 * 1. Remove default style. Also works in Firefox
 * 2. Style
 * 3. Remove default style in IE 10/11
 */

.uk-select:not([multiple]):not([size]) {
    /* 1 */
    -webkit-appearance: none;
    -moz-appearance: none;
    /* 2 */
    padding-right: @form-select-padding-right;
    .svg-fill(@internal-form-select-image, "#000", @form-select-icon-color);
    background-repeat: no-repeat;
    background-position: 100% 50%;
}

/* 3 */
.uk-select:not([multiple]):not([size])::-ms-expand { display: none; }

/*
 * Disabled
 */

.uk-select:not([multiple]):not([size]):disabled { .svg-fill(@internal-form-select-image, "#000", @form-select-disabled-icon-color); }


/* Radio and checkbox
 * Note: Does not work in IE11
 ========================================================================== */

/*
 * 1. Style
 * 2. Make box more robust so it clips the child element
 * 3. Vertical alignment
 * 4. Remove default style
 * 5. Fix black background on iOS
 * 6. Center icons
 */

.uk-radio,
.uk-checkbox {
    /* 1 */
    display: inline-block;
    height: @form-radio-size;
    width: @form-radio-size;
    /* 2 */
    overflow: hidden;
    /* 3 */
    margin-top: @form-radio-margin-top;
    vertical-align: middle;
    /* 4 */
    -webkit-appearance: none;
    -moz-appearance: none;
    /* 5 */
    background-color: @form-radio-background;
    /* 6 */
    background-repeat: no-repeat;
    background-position: 50% 50%;
    .hook-form-radio;
}

.uk-radio { border-radius: 50%; }

/* Focus */
.uk-radio:focus,
.uk-checkbox:focus {
    outline: none;
    .hook-form-radio-focus;
}

/*
 * Checked
 */

.uk-radio:checked,
.uk-checkbox:checked,
.uk-checkbox:indeterminate {
    background-color: @form-radio-checked-background;
    .hook-form-radio-checked;
}

/* Focus */
.uk-radio:checked:focus,
.uk-checkbox:checked:focus,
.uk-checkbox:indeterminate:focus {
    background-color: @form-radio-checked-focus-background;
    .hook-form-radio-checked-focus;
}

/*
 * Icons
 */

.uk-radio:checked { .svg-fill(@internal-form-radio-image, "#000", @form-radio-checked-icon-color); }
.uk-checkbox:checked { .svg-fill(@internal-form-checkbox-image, "#000", @form-radio-checked-icon-color); }
.uk-checkbox:indeterminate { .svg-fill(@internal-form-checkbox-indeterminate-image, "#000", @form-radio-checked-icon-color); }

/*
 * Disabled
 */

.uk-radio:disabled,
.uk-checkbox:disabled {
    background-color: @form-radio-disabled-background;
    .hook-form-radio-disabled;
}

.uk-radio:disabled:checked { .svg-fill(@internal-form-radio-image, "#000", @form-radio-disabled-icon-color); }
.uk-checkbox:disabled:checked { .svg-fill(@internal-form-checkbox-image, "#000", @form-radio-disabled-icon-color); }
.uk-checkbox:disabled:indeterminate { .svg-fill(@internal-form-checkbox-indeterminate-image, "#000", @form-radio-disabled-icon-color); }


/* Legend
 ========================================================================== */

/*
 * Legend
 * 1. Behave like block element
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove padding so people aren't caught out if they zero out fieldsets.
 * 4. Style
 */

.uk-legend {
    /* 1 */
    width: 100%;
    /* 2 */
    color: inherit;
    /* 3 */
    padding: 0;
    /* 4 */
    font-size: @form-legend-font-size;
    line-height: @form-legend-line-height;
    .hook-form-legend;
}


/* Custom controls
 ========================================================================== */

/*
 * 1. Container fits its content
 * 2. Create position context
 * 3. Prevent content overflow
 * 4. Behave like most inline-block elements
 */

.uk-form-custom {
    /* 1 */
    display: inline-block;
    /* 2 */
    position: relative;
    /* 3 */
    max-width: 100%;
    /* 4 */
    vertical-align: middle;
}

/*
 * 1. Position and resize the form control to always cover its container
 * 2. Required for Firefox for positioning to the left
 * 3. Required for Webkit to make `height` work
 * 4. Hide controle and show cursor
 * 5. Needed for the cursor
 * 6. Clip height caused by 5. Needed for Webkit only
 */

.uk-form-custom select,
.uk-form-custom input[type="file"] {
    /* 1 */
    position: absolute;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* 2 */
    left: 0;
    /* 3 */
    -webkit-appearance: none;
    /* 4 */
    opacity: 0;
    cursor: pointer;
}

.uk-form-custom input[type="file"] {
    /* 5 */
    font-size: 500px;
    /* 6 */
    overflow: hidden;
}


/* Label
 ========================================================================== */

.uk-form-label {
    .hook-form-label;
}


/* Layout
 ========================================================================== */

/*
 * Stacked
 */

.uk-form-stacked .uk-form-label {
    display: block;
    margin-bottom: @form-stacked-margin-bottom;
    .hook-form-stacked-label;
}

/*
 * Horizontal
 */

/* Tablet portrait and smaller */
@media (max-width: @breakpoint-small-max) {

    /* Behave like `uk-form-stacked` */
    .uk-form-horizontal .uk-form-label {
        display: block;
        margin-bottom: @form-stacked-margin-bottom;
        .hook-form-stacked-label;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-form-horizontal .uk-form-label {
        width: @form-horizontal-label-width;
        margin-top: @form-horizontal-label-margin-top;
        float: left;
        .hook-form-horizontal-label;
    }

    .uk-form-horizontal .uk-form-controls { margin-left: @form-horizontal-controls-margin-left; }

    /* Better vertical alignment if controls are checkboxes and radio buttons with text */
    .uk-form-horizontal .uk-form-controls-text { padding-top: @form-horizontal-controls-text-padding-top; }

}


/* Icons
 ========================================================================== */

/*
 * 1. Set position
 * 2. Set width
 * 3. Center icon vertically and horizontally
 * 4. Style
 */

.uk-form-icon {
    /* 1 */
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    /* 2 */
    width: @form-icon-width;
    /* 3 */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    /* 4 */
    color: @form-icon-color;
}

/*
 * Required for `a`.
 */

.uk-form-icon:hover { color: @form-icon-hover-color; }

/*
 * Make `input` element clickable through icon, e.g. if it's a `span`
 */

.uk-form-icon:not(a):not(button):not(input) { pointer-events: none; }

/*
 * Input padding
 */

.uk-form-icon:not(.uk-form-icon-flip) + .uk-input { padding-left: @form-icon-width; }

/*
 * Position modifier
 */

.uk-form-icon-flip {
    right: 0;
    left: auto;
}

.uk-form-icon-flip + .uk-input { padding-right: @form-icon-width; }


// Hooks
// ========================================================================

.hook-form-misc;

.hook-form() {}
.hook-form-single-line() {}
.hook-form-multi-line() {}
.hook-form-focus() {}
.hook-form-disabled() {}
.hook-form-danger() {}
.hook-form-success() {}
.hook-form-blank() {}
.hook-form-blank-focus() {}
.hook-form-radio() {}
.hook-form-radio-focus() {}
.hook-form-radio-checked() {}
.hook-form-radio-checked-focus() {}
.hook-form-radio-disabled() {}
.hook-form-legend() {}
.hook-form-label() {}
.hook-form-stacked-label() {}
.hook-form-horizontal-label() {}
.hook-form-misc() {}


// Inverse
// ========================================================================

@inverse-form-background:                      @inverse-global-muted-background;
@inverse-form-color:                           @inverse-global-color;
@inverse-form-focus-background:                @inverse-global-muted-background;
@inverse-form-focus-color:                     @inverse-global-color;
@inverse-form-placeholder-color:               @inverse-global-muted-color;

@inverse-form-select-icon-color:               @inverse-global-color;

@inverse-form-radio-background:                darken(@inverse-global-muted-background, 5%);

@inverse-form-radio-checked-background:        @inverse-global-primary-background;
@inverse-form-radio-checked-icon-color:        @inverse-global-inverse-color;

@inverse-form-radio-checked-focus-background:  darken(@inverse-global-primary-background, 10%);

.hook-inverse() {

    .uk-input,
    .uk-select,
    .uk-textarea {
        background-color: @inverse-form-background;
        color: @inverse-form-color;
        background-clip: padding-box;
        .hook-inverse-form;

        &:focus {
            background-color: @inverse-form-focus-background;
            color: @inverse-form-focus-color;
            .hook-inverse-form-focus;
        }
    }

    //
    // Placeholder
    //

    .uk-input:-ms-input-placeholder { color: @inverse-form-placeholder-color !important; }
    .uk-input::placeholder { color: @inverse-form-placeholder-color; }

    .uk-textarea:-ms-input-placeholder { color: @inverse-form-placeholder-color !important; }
    .uk-textarea::placeholder { color: @inverse-form-placeholder-color; }

    //
    // Radio and checkbox
    //

    .uk-select:not([multiple]):not([size]) { .svg-fill(@internal-form-select-image, "#000", @inverse-form-select-icon-color); }

    //
    // Radio and checkbox
    //

    .uk-radio,
    .uk-checkbox {
        background-color: @inverse-form-radio-background;
        .hook-inverse-form-radio;
    }

    // Focus
    .uk-radio:focus,
    .uk-checkbox:focus {
        .hook-inverse-form-radio-focus;
    }

    // Checked
    .uk-radio:checked,
    .uk-checkbox:checked,
    .uk-checkbox:indeterminate {
        background-color: @inverse-form-radio-checked-background;
        .hook-inverse-form-radio-checked;
    }

    // Focus
    .uk-radio:checked:focus,
    .uk-checkbox:checked:focus,
    .uk-checkbox:indeterminate:focus {
        background-color: @inverse-form-radio-checked-focus-background;
        .hook-inverse-form-radio-checked-focus;
    }

    // Icon
    .uk-radio:checked { .svg-fill(@internal-form-radio-image, "#000", @inverse-form-radio-checked-icon-color); }
    .uk-checkbox:checked { .svg-fill(@internal-form-checkbox-image, "#000", @inverse-form-radio-checked-icon-color); }
    .uk-checkbox:indeterminate { .svg-fill(@internal-form-checkbox-indeterminate-image, "#000", @inverse-form-radio-checked-icon-color); }

    // Label
    .uk-form-label {
        .hook-inverse-form-label;
    }

}

.hook-inverse-form() {}
.hook-inverse-form-focus() {}
.hook-inverse-form-radio() {}
.hook-inverse-form-radio-focus() {}
.hook-inverse-form-radio-checked() {}
.hook-inverse-form-radio-checked-focus() {}
.hook-inverse-form-label() {}

// Name:            Button
// Description:     Styles for buttons
//
// Component:       `uk-button`
//
// Sub-objects:     `uk-button-group`
//
// Modifiers:       `uk-button-default`
//                  `uk-button-primary`
//                  `uk-button-secondary`
//                  `uk-button-danger`
//                  `uk-button-text`
//                  `uk-button-link`
//                  `uk-button-small`
//                  `uk-button-large`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@button-line-height:                            @global-control-height;
@button-small-line-height:                      @global-control-small-height;
@button-large-line-height:                      @global-control-large-height;

@button-font-size:                              @global-font-size;
@button-small-font-size:                        @global-small-font-size;
@button-large-font-size:                        @global-medium-font-size;

@button-padding-horizontal:                     @global-gutter;
@button-small-padding-horizontal:               @global-small-gutter;
@button-large-padding-horizontal:               @global-medium-gutter;

@button-default-background:                     @global-muted-background;
@button-default-color:                          @global-emphasis-color;
@button-default-hover-background:               darken(@button-default-background, 5%);
@button-default-hover-color:                    @global-emphasis-color;
@button-default-active-background:              darken(@button-default-background, 10%);
@button-default-active-color:                   @global-emphasis-color;

@button-primary-background:                     @global-primary-background;
@button-primary-color:                          @global-inverse-color;
@button-primary-hover-background:               darken(@button-primary-background, 5%);
@button-primary-hover-color:                    @global-inverse-color;
@button-primary-active-background:              darken(@button-primary-background, 10%);
@button-primary-active-color:                   @global-inverse-color;

@button-secondary-background:                   @global-secondary-background;
@button-secondary-color:                        @global-inverse-color;
@button-secondary-hover-background:             darken(@button-secondary-background, 5%);
@button-secondary-hover-color:                  @global-inverse-color;
@button-secondary-active-background:            darken(@button-secondary-background, 10%);
@button-secondary-active-color:                 @global-inverse-color;

@button-danger-background:                      @global-danger-background;
@button-danger-color:                           @global-inverse-color;
@button-danger-hover-background:                darken(@button-danger-background, 5%);
@button-danger-hover-color:                     @global-inverse-color;
@button-danger-active-background:               darken(@button-danger-background, 10%);
@button-danger-active-color:                    @global-inverse-color;

@button-disabled-background:                    @global-muted-background;
@button-disabled-color:                         @global-muted-color;

@button-text-line-height:                       @global-line-height;
@button-text-color:                             @global-muted-color;
@button-text-hover-color:                       @global-color;
@button-text-disabled-color:                    @global-muted-color;

@button-link-line-height:                       @global-line-height;
@button-link-color:                             @global-link-color;
@button-link-hover-color:                       @global-link-hover-color;
@button-link-hover-text-decoration:             underline;
@button-link-disabled-color:                    @global-muted-color;


/* ========================================================================
   Component: Button
 ========================================================================== */

/*
 * 1. Remove margins in Chrome, Safari and Opera.
 * 2. Remove borders for `button`.
 * 3. Remove border-radius in Chrome.
 * 4. Address `overflow` set to `hidden` in IE.
 * 5. Correct `font` properties and `color` not being inherited for `button`.
 * 6. Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 7. Style
 * 8. `line-height` is used to create a height because it also centers the text vertically for `a` elements.
 *    Better would be to use height and flexbox to center the text vertically but flexbox doesn't work in Firefox on `button` elements.
 * 9. Align text if button has a width
 * 10. Required for `a`.
 */

.uk-button {
    /* 1 */
    margin: 0;
    /* 2 */
    border: none;
    /* 3 */
    border-radius: 0;
    /* 4 */
    overflow: visible;
    /* 5 */
    font: inherit;
    color: inherit;
    /* 6 */
    text-transform: none;
    /* 7 */
    display: inline-block;
    box-sizing: border-box;
    padding: 0 @button-padding-horizontal;
    vertical-align: middle;
    font-size: @button-font-size;
    /* 8 */
    line-height: @button-line-height;
    /* 9 */
    text-align: center;
    /* 10 */
    text-decoration: none;
    .hook-button;
}

.uk-button:not(:disabled) { cursor: pointer; }

/*
 * Remove the inner border and padding in Firefox.
 */

.uk-button::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/* Hover */
.uk-button:hover {
    /* 8 */
    text-decoration: none;
    .hook-button-hover;
}

/* Focus */
.uk-button:focus {
    outline: none;
    .hook-button-focus;
}

/* OnClick + Active */
.uk-button:active,
.uk-button.uk-active {
    .hook-button-active;
}


/* Style modifiers
 ========================================================================== */

/*
 * Default
 */

.uk-button-default {
    background-color: @button-default-background;
    color: @button-default-color;
    .hook-button-default;
}

/* Hover + Focus */
.uk-button-default:hover,
.uk-button-default:focus {
    background-color: @button-default-hover-background;
    color: @button-default-hover-color;
    .hook-button-default-hover;
}

/* OnClick + Active */
.uk-button-default:active,
.uk-button-default.uk-active {
    background-color: @button-default-active-background;
    color: @button-default-active-color;
    .hook-button-default-active;
}

/*
 * Primary
 */

.uk-button-primary {
    background-color: @button-primary-background;
    color: @button-primary-color;
    .hook-button-primary;
}

/* Hover + Focus */
.uk-button-primary:hover,
.uk-button-primary:focus {
    background-color: @button-primary-hover-background;
    color: @button-primary-hover-color;
    .hook-button-primary-hover;
}

/* OnClick + Active */
.uk-button-primary:active,
.uk-button-primary.uk-active {
    background-color: @button-primary-active-background;
    color: @button-primary-active-color;
    .hook-button-primary-active;
}

/*
 * Secondary
 */

.uk-button-secondary {
    background-color: @button-secondary-background;
    color: @button-secondary-color;
    .hook-button-secondary;
}

/* Hover + Focus */
.uk-button-secondary:hover,
.uk-button-secondary:focus {
    background-color: @button-secondary-hover-background;
    color: @button-secondary-hover-color;
    .hook-button-secondary-hover;
}

/* OnClick + Active */
.uk-button-secondary:active,
.uk-button-secondary.uk-active {
    background-color: @button-secondary-active-background;
    color: @button-secondary-active-color;
    .hook-button-secondary-active;
}

/*
 * Danger
 */

.uk-button-danger {
    background-color: @button-danger-background;
    color: @button-danger-color;
    .hook-button-danger;
}

/* Hover + Focus */
.uk-button-danger:hover,
.uk-button-danger:focus {
    background-color: @button-danger-hover-background;
    color: @button-danger-hover-color;
    .hook-button-danger-hover;
}

/* OnClick + Active */
.uk-button-danger:active,
.uk-button-danger.uk-active {
    background-color: @button-danger-active-background;
    color: @button-danger-active-color;
    .hook-button-danger-active;
}

/*
 * Disabled
 * The same for all style modifiers
 */

.uk-button-default:disabled,
.uk-button-primary:disabled,
.uk-button-secondary:disabled,
.uk-button-danger:disabled {
    background-color: @button-disabled-background;
    color: @button-disabled-color;
    .hook-button-disabled;
}


/* Size modifiers
 ========================================================================== */

.uk-button-small {
    padding: 0 @button-small-padding-horizontal;
    line-height: @button-small-line-height;
    font-size: @button-small-font-size;
    .hook-button-small;
}

.uk-button-large {
    padding: 0 @button-large-padding-horizontal;
    line-height: @button-large-line-height;
    font-size: @button-large-font-size;
    .hook-button-large;
}


/* Text modifiers
 ========================================================================== */

/*
 * Text
 * 1. Reset
 * 2. Style
 */

.uk-button-text {
    /* 1 */
    padding: 0;
    line-height: @button-text-line-height;
    background: none;
    /* 2 */
    color: @button-text-color;
    .hook-button-text;
}

/* Hover + Focus */
.uk-button-text:hover,
.uk-button-text:focus {
    color: @button-text-hover-color;
    .hook-button-text-hover;
}

/* Disabled */
.uk-button-text:disabled {
    color: @button-text-disabled-color;
    .hook-button-text-disabled;
}

/*
 * Link
 * 1. Reset
 * 2. Style
 */

.uk-button-link {
    /* 1 */
    padding: 0;
    line-height: @button-link-line-height;
    background: none;
    /* 2 */
    color: @button-link-color;
    .hook-button-link;
}

/* Hover + Focus */
.uk-button-link:hover,
.uk-button-link:focus {
    color: @button-link-hover-color;
    text-decoration: @button-link-hover-text-decoration;
}

/* Disabled */
.uk-button-link:disabled {
    color: @button-link-disabled-color;
    text-decoration: none;
}


/* Group
 ========================================================================== */

/*
 * 1. Using `flex` instead of `inline-block` to prevent whitespace betweent child elements
 * 2. Behave like button
 * 3. Create position context
 */

.uk-button-group {
    /* 1 */
    display: inline-flex;
    /* 2 */
    vertical-align: middle;
    /* 3 */
    position: relative;
}


// Hooks
// ========================================================================

.hook-button-misc;

.hook-button() {}
.hook-button-hover() {}
.hook-button-focus() {}
.hook-button-active() {}
.hook-button-default() {}
.hook-button-default-hover() {}
.hook-button-default-active() {}
.hook-button-primary() {}
.hook-button-primary-hover() {}
.hook-button-primary-active() {}
.hook-button-secondary() {}
.hook-button-secondary-hover() {}
.hook-button-secondary-active() {}
.hook-button-danger() {}
.hook-button-danger-hover() {}
.hook-button-danger-active() {}
.hook-button-disabled() {}
.hook-button-small() {}
.hook-button-large() {}
.hook-button-text() {}
.hook-button-text-hover() {}
.hook-button-text-disabled() {}
.hook-button-link() {}
.hook-button-misc() {}


// Inverse
// ========================================================================

@inverse-button-default-background:            @inverse-global-primary-background;
@inverse-button-default-color:                 @inverse-global-inverse-color;
@inverse-button-default-hover-background:      darken(@inverse-button-default-background, 5%);
@inverse-button-default-hover-color:           @inverse-global-inverse-color;
@inverse-button-default-active-background:     darken(@inverse-button-default-background, 10%);
@inverse-button-default-active-color:          @inverse-global-inverse-color;
@inverse-button-primary-background:            @inverse-global-primary-background;
@inverse-button-primary-color:                 @inverse-global-inverse-color;
@inverse-button-primary-hover-background:      darken(@inverse-button-primary-background, 5%);
@inverse-button-primary-hover-color:           @inverse-global-inverse-color;
@inverse-button-primary-active-background:     darken(@inverse-button-primary-background, 10%);
@inverse-button-primary-active-color:          @inverse-global-inverse-color;
@inverse-button-secondary-background:          @inverse-global-primary-background;
@inverse-button-secondary-color:               @inverse-global-inverse-color;
@inverse-button-secondary-hover-background:    darken(@inverse-button-secondary-background, 5%);
@inverse-button-secondary-hover-color:         @inverse-global-inverse-color;
@inverse-button-secondary-active-background:   darken(@inverse-button-secondary-background, 10%);
@inverse-button-secondary-active-color:        @inverse-global-inverse-color;
@inverse-button-text-color:                    @inverse-global-muted-color;
@inverse-button-text-hover-color:              @inverse-global-color;
@inverse-button-text-disabled-color:           @inverse-global-muted-color;
@inverse-button-link-color:                    @inverse-global-muted-color;
@inverse-button-link-hover-color:              @inverse-global-color;

.hook-inverse() {

    //
    // Default
    //

    .uk-button-default {
        background-color: @inverse-button-default-background;
        color: @inverse-button-default-color;
        .hook-inverse-button-default;
    }

    .uk-button-default:hover,
    .uk-button-default:focus {
        background-color: @inverse-button-default-hover-background;
        color: @inverse-button-default-hover-color;
        .hook-inverse-button-default-hover;
    }

    .uk-button-default:active,
    .uk-button-default.uk-active {
        background-color: @inverse-button-default-active-background;
        color: @inverse-button-default-active-color;
        .hook-inverse-button-default-active;
    }

    //
    // Primary
    //

    .uk-button-primary {
        background-color: @inverse-button-primary-background;
        color: @inverse-button-primary-color;
        .hook-inverse-button-primary;
    }

    .uk-button-primary:hover,
    .uk-button-primary:focus {
        background-color: @inverse-button-primary-hover-background;
        color: @inverse-button-primary-hover-color;
        .hook-inverse-button-primary-hover;
    }

    .uk-button-primary:active,
    .uk-button-primary.uk-active {
        background-color: @inverse-button-primary-active-background;
        color: @inverse-button-primary-active-color;
        .hook-inverse-button-primary-active;
    }

    //
    // Secondary
    //

    .uk-button-secondary {
        background-color: @inverse-button-secondary-background;
        color: @inverse-button-secondary-color;
        .hook-inverse-button-secondary;
    }

    .uk-button-secondary:hover,
    .uk-button-secondary:focus {
        background-color: @inverse-button-secondary-hover-background;
        color: @inverse-button-secondary-hover-color;
        .hook-inverse-button-secondary-hover;
    }

    .uk-button-secondary:active,
    .uk-button-secondary.uk-active {
        background-color: @inverse-button-secondary-active-background;
        color: @inverse-button-secondary-active-color;
        .hook-inverse-button-secondary-active;
    }

    //
    // Text
    //

    .uk-button-text {
        color: @inverse-button-text-color;
        .hook-inverse-button-text;
    }

    .uk-button-text:hover,
    .uk-button-text:focus {
        color: @inverse-button-text-hover-color;
        .hook-inverse-button-text-hover;
    }

    .uk-button-text:disabled {
        color: @inverse-button-text-disabled-color;
        .hook-inverse-button-text-disabled;
    }

    //
    // Link
    //

    .uk-button-link {
        color: @inverse-button-link-color;
        .hook-inverse-button-link;
    }

    .uk-button-link:hover,
    .uk-button-link:focus { color: @inverse-button-link-hover-color; }


}

.hook-inverse-button-default() {}
.hook-inverse-button-default-hover() {}
.hook-inverse-button-default-active() {}
.hook-inverse-button-primary() {}
.hook-inverse-button-primary-hover() {}
.hook-inverse-button-primary-active() {}
.hook-inverse-button-secondary() {}
.hook-inverse-button-secondary-hover() {}
.hook-inverse-button-secondary-active() {}
.hook-inverse-button-text() {}
.hook-inverse-button-text-hover() {}
.hook-inverse-button-text-disabled() {}
.hook-inverse-button-link() {}

// Name:            Section
// Description:     Component to create horizontal layout section
//
// Component:       `uk-section`
//
// Modifiers:       `uk-section-xsmall`
//                  `uk-section-small`
//                  `uk-section-large`
//                  `uk-section-xlarge`
//                  `uk-section-default`
//                  `uk-section-muted`
//                  `uk-section-primary`
//                  `uk-section-secondary`
//                  `uk-section-overlap`
//
// States:          `uk-preserve-color`
//
// ========================================================================


// Variables
// ========================================================================

@section-padding-vertical:                        @global-medium-margin;
@section-padding-vertical-m:                      @global-large-margin;

@section-xsmall-padding-vertical:                 @global-margin;

@section-small-padding-vertical:                  @global-medium-margin;

@section-large-padding-vertical:                  @global-large-margin;
@section-large-padding-vertical-m:                @global-xlarge-margin;

@section-xlarge-padding-vertical:                 @global-xlarge-margin;
@section-xlarge-padding-vertical-m:               (@global-large-margin + @global-xlarge-margin);

@section-default-background:                      @global-background;

@section-muted-background:                        @global-muted-background;

@section-primary-background:                      @global-primary-background;
@section-primary-color-mode:                      light;

@section-secondary-background:                    @global-secondary-background;
@section-secondary-color-mode:                    light;


/* ========================================================================
   Component: Section
 ========================================================================== */

/*
 * 1. Make it work with `100vh` and height in general
 */

.uk-section {
    box-sizing: border-box; /* 1 */
    padding-top: @section-padding-vertical;
    padding-bottom: @section-padding-vertical;
    .hook-section;
}

/* Desktop and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-section {
        padding-top: @section-padding-vertical-m;
        padding-bottom: @section-padding-vertical-m;
    }

}

/*
 * Micro clearfix
 */

.uk-section::before,
.uk-section::after {
    content: "";
    display: table;
}

.uk-section::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-section > :last-child { margin-bottom: 0; }


/* Size modifiers
 ========================================================================== */

/*
 * XSmall
 */

.uk-section-xsmall {
    padding-top: @section-xsmall-padding-vertical;
    padding-bottom: @section-xsmall-padding-vertical;
}

/*
 * Small
 */

.uk-section-small {
    padding-top: @section-small-padding-vertical;
    padding-bottom: @section-small-padding-vertical;
}

/*
 * Large
 */

.uk-section-large {
    padding-top: @section-large-padding-vertical;
    padding-bottom: @section-large-padding-vertical;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-section-large {
        padding-top: @section-large-padding-vertical-m;
        padding-bottom: @section-large-padding-vertical-m;
    }

}


/*
 * XLarge
 */

.uk-section-xlarge {
    padding-top: @section-xlarge-padding-vertical;
    padding-bottom: @section-xlarge-padding-vertical;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-section-xlarge {
        padding-top: @section-xlarge-padding-vertical-m;
        padding-bottom: @section-xlarge-padding-vertical-m;
    }

}


/* Style modifiers
 ========================================================================== */

/*
 * Default
 */

.uk-section-default {
    background: @section-default-background;
    .hook-section-default;
}

/*
 * Muted
 */

.uk-section-muted {
    background: @section-muted-background;
    .hook-section-muted;
}

/*
 * Primary
 */

.uk-section-primary {
    background: @section-primary-background;
    .hook-section-primary;
}

.uk-section-primary:not(.uk-preserve-color):extend(.uk-light all) when (@section-primary-color-mode = light) {}
.uk-section-primary:not(.uk-preserve-color):extend(.uk-dark all) when (@section-primary-color-mode = dark) {}


/*
 * Secondary
 */

.uk-section-secondary {
    background: @section-secondary-background;
    .hook-section-secondary;
}

.uk-section-secondary:not(.uk-preserve-color):extend(.uk-light all) when (@section-secondary-color-mode = light) {}
.uk-section-secondary:not(.uk-preserve-color):extend(.uk-dark all) when (@section-secondary-color-mode = dark) {}


/* Overlap modifier
 ========================================================================== */

/*
 * Reserved modifier to make a section overlap another section with an border image
 * Implemented by the theme
 */

.uk-section-overlap {
    .hook-section-overlap;
}


// Hooks
// ========================================================================

.hook-section-misc;

.hook-section() {}
.hook-section-default() {}
.hook-section-muted() {}
.hook-section-secondary() {}
.hook-section-primary() {}
.hook-section-overlap() {}
.hook-section-misc() {}
// Name:            Container
// Description:     Component to align and center your site and grid content
//
// Component:       `uk-container`
//
// Modifier:        `uk-container-small`
//                  `uk-container-large`
//                  `uk-container-expand`
//
// ========================================================================


// Variables
// ========================================================================

@container-max-width:                   1200px;
@container-small-max-width:             900px;
@container-large-max-width:             1600px;

@container-padding-horizontal:          15px;
@container-padding-horizontal-s:        @global-gutter;
@container-padding-horizontal-m:        @global-medium-gutter;


/* ========================================================================
   Component: Container
 ========================================================================== */

/*
 * 1. Box sizing has to be `content-box` so the max-width is always the same and
 *    unaffected by the padding on different breakpoints. It's important for the size modifiers.
 */

.uk-container {
    box-sizing: content-box; /* 1 */
    max-width: @container-max-width;
    margin-left: auto;
    margin-right: auto;
    padding-left: @container-padding-horizontal;
    padding-right: @container-padding-horizontal;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-container {
        padding-left: @container-padding-horizontal-s;
        padding-right: @container-padding-horizontal-s;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-container {
        padding-left: @container-padding-horizontal-m;
        padding-right: @container-padding-horizontal-m;
    }

}

/*
 * Micro clearfix
 */

.uk-container::before,
.uk-container::after {
    content: "";
    display: table;
}

.uk-container::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-container > :last-child { margin-bottom: 0; }

/*
 * Remove padding from nested containers
 */

.uk-container .uk-container {
    padding-left: 0;
    padding-right: 0;
}


/* Size modifier
 ========================================================================== */

.uk-container-small { max-width: @container-small-max-width; }

.uk-container-large { max-width: @container-large-max-width; }

.uk-container-expand { max-width: none; }


// Hooks
// ========================================================================

.hook-container-misc;

.hook-container-misc() {}
// Name:            Grid
// Description:     Component to create responsive, fluid and nestable grids
//
// Component:       `uk-grid`
//
// Modifiers:       `uk-grid-small`
//                  `uk-grid-medium`
//                  `uk-grid-large`
//                  `uk-grid-collapse`
//                  `uk-grid-divider`
//                  `uk-grid-match`
//                  `uk-grid-stack`
//                  `uk-grid-margin`
//                  `uk-grid-margin-small`
//                  `uk-grid-margin-medium`
//                  `uk-grid-margin-large`
//                  `uk-grid-margin-collapse`
//
// Sub-modifier:    `uk-grid-item-match`
//
// States:          `uk-first-column`
//
// ========================================================================


// Variables
// ========================================================================

@grid-gutter-horizontal:                        @global-gutter;
@grid-gutter-vertical:                          @grid-gutter-horizontal;
@grid-gutter-horizontal-l:                      @global-medium-gutter;
@grid-gutter-vertical-l:                        @grid-gutter-horizontal-l;

@grid-small-gutter-horizontal:                  @global-small-gutter;
@grid-small-gutter-vertical:                    @grid-small-gutter-horizontal;

@grid-medium-gutter-horizontal:                 @global-gutter;
@grid-medium-gutter-vertical:                   @grid-medium-gutter-horizontal;

@grid-large-gutter-horizontal:                  @global-medium-gutter;
@grid-large-gutter-vertical:                    @grid-large-gutter-horizontal;
@grid-large-gutter-horizontal-l:                @global-large-gutter;
@grid-large-gutter-vertical-l:                  @grid-large-gutter-horizontal-l;

@grid-divider-border-width:                     @global-border-width;
@grid-divider-border:                           @global-border;


/* ========================================================================
   Component: Grid
 ========================================================================== */

/*
 * 1. Allow cells to wrap into the next line
 * 2. Reset list
 */

.uk-grid {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin: 0;
    padding: 0;
    list-style: none;
}

/*
 * Grid cell
 * Note: Space is allocated solely based on content dimensions, but shrinks: 0 1 auto
 * Reset margin for e.g. paragraphs
 */

.uk-grid > * { margin: 0; }

/*
 * Remove margin from the last-child
 */

.uk-grid > * > :last-child { margin-bottom: 0; }


/* Gutter
 ========================================================================== */

/*
 * Default
 */

/* Horizontal */
.uk-grid { margin-left: -@grid-gutter-horizontal; }
.uk-grid > * { padding-left: @grid-gutter-horizontal; }

/* Vertical */
.uk-grid + .uk-grid,
.uk-grid > .uk-grid-margin,
* + .uk-grid-margin { margin-top: @grid-gutter-vertical; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    /* Horizontal */
    .uk-grid { margin-left: -@grid-gutter-horizontal-l; }
    .uk-grid > * { padding-left: @grid-gutter-horizontal-l; }

    /* Vertical */
    .uk-grid + .uk-grid,
    .uk-grid > .uk-grid-margin,
    * + .uk-grid-margin { margin-top: @grid-gutter-vertical-l; }

}

/*
 * Small
 */

/* Horizontal */
.uk-grid-small { margin-left: -@grid-small-gutter-horizontal; }
.uk-grid-small > * { padding-left: @grid-small-gutter-horizontal; }

/* Vertical */
.uk-grid + .uk-grid-small,
.uk-grid-small > .uk-grid-margin,
* + .uk-grid-margin-small { margin-top: @grid-small-gutter-vertical; }

/*
 * Medium
 */

/* Horizontal */
.uk-grid-medium { margin-left: -@grid-medium-gutter-horizontal; }
.uk-grid-medium > * { padding-left: @grid-medium-gutter-horizontal; }

/* Vertical */
.uk-grid + .uk-grid-medium,
.uk-grid-medium > .uk-grid-margin,
* + .uk-grid-margin-medium { margin-top: @grid-medium-gutter-vertical; }

/*
 * Large
 */

/* Horizontal */
.uk-grid-large { margin-left: -@grid-large-gutter-horizontal; }
.uk-grid-large > * { padding-left: @grid-large-gutter-horizontal; }

/* Vertical */
.uk-grid + .uk-grid-large,
.uk-grid-large > .uk-grid-margin,
* + .uk-grid-margin-large { margin-top: @grid-large-gutter-vertical; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    /* Horizontal */
    .uk-grid-large { margin-left: -@grid-large-gutter-horizontal-l; }
    .uk-grid-large > * { padding-left: @grid-large-gutter-horizontal-l; }

    /* Vertical */
    .uk-grid + .uk-grid-large,
    .uk-grid-large > .uk-grid-margin,
    * + .uk-grid-margin-large { margin-top: @grid-large-gutter-vertical-l; }

}

/*
 * Collapse
 */

/* Horizontal */
.uk-grid-collapse { margin-left: 0; }
.uk-grid-collapse > * { padding-left: 0; }

/* Vertical */
.uk-grid + .uk-grid-collapse,
.uk-grid-collapse > .uk-grid-margin { margin-top: 0; }


/* Divider
 ========================================================================== */

.uk-grid-divider > * { position: relative; }

.uk-grid-divider > :not(.uk-first-column)::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    border-left: @grid-divider-border-width solid @grid-divider-border;
}

/* Vertical */
.uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    border-top: @grid-divider-border-width solid @grid-divider-border;
}

/*
 * Default
 */

/* Horizontal */
.uk-grid-divider { margin-left: -(@grid-gutter-horizontal * 2); }
.uk-grid-divider > * { padding-left: (@grid-gutter-horizontal * 2); }

.uk-grid-divider > :not(.uk-first-column)::before { left: @grid-gutter-horizontal; }

/* Vertical */
.uk-grid-divider.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-gutter-vertical * 2); }

.uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
    top: -@grid-gutter-vertical;
    left: (@grid-gutter-horizontal * 2);
}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    /* Horizontal */
    .uk-grid-divider { margin-left: -(@grid-gutter-horizontal-l * 2); }
    .uk-grid-divider > * { padding-left: (@grid-gutter-horizontal-l * 2); }

    .uk-grid-divider > :not(.uk-first-column)::before { left: @grid-gutter-horizontal-l; }

    /* Vertical */
    .uk-grid-divider.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-gutter-vertical-l * 2); }

    .uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
        top: -@grid-gutter-vertical-l;
        left: (@grid-gutter-horizontal-l * 2);
    }

}

/*
 * Small
 */

/* Horizontal */
.uk-grid-divider.uk-grid-small { margin-left: -(@grid-small-gutter-horizontal * 2); }
.uk-grid-divider.uk-grid-small > * { padding-left: (@grid-small-gutter-horizontal * 2); }

.uk-grid-divider.uk-grid-small > :not(.uk-first-column)::before { left: @grid-small-gutter-horizontal; }

/* Vertical */
.uk-grid-divider.uk-grid-small.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-small-gutter-vertical * 2); }

.uk-grid-divider.uk-grid-small.uk-grid-stack > .uk-grid-margin::before {
    top: -@grid-small-gutter-vertical;
    left: (@grid-small-gutter-horizontal * 2);
}

/*
 * Medium
 */

/* Horizontal */
.uk-grid-divider.uk-grid-medium { margin-left: -(@grid-medium-gutter-horizontal * 2); }
.uk-grid-divider.uk-grid-medium > * { padding-left: (@grid-medium-gutter-horizontal * 2); }

.uk-grid-divider.uk-grid-medium > :not(.uk-first-column)::before { left: @grid-medium-gutter-horizontal; }

/* Vertical */
.uk-grid-divider.uk-grid-medium.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-medium-gutter-vertical * 2); }

.uk-grid-divider.uk-grid-medium.uk-grid-stack > .uk-grid-margin::before {
    top: -@grid-medium-gutter-vertical;
    left: (@grid-medium-gutter-horizontal * 2);
}

/*
 * Large
 */

/* Horizontal */
.uk-grid-divider.uk-grid-large { margin-left: -(@grid-large-gutter-horizontal * 2); }
.uk-grid-divider.uk-grid-large > * { padding-left: (@grid-large-gutter-horizontal * 2); }

.uk-grid-divider.uk-grid-large > :not(.uk-first-column)::before { left: @grid-large-gutter-horizontal; }

/* Vertical */
.uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-large-gutter-vertical * 2); }

.uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin::before {
    top: -@grid-large-gutter-vertical;
    left: (@grid-large-gutter-horizontal * 2);
}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    /* Horizontal */
    .uk-grid-divider.uk-grid-large { margin-left: -(@grid-large-gutter-horizontal-l * 2); }
    .uk-grid-divider.uk-grid-large > * { padding-left: (@grid-large-gutter-horizontal-l * 2); }

    .uk-grid-divider.uk-grid-large > :not(.uk-first-column)::before { left: @grid-large-gutter-horizontal-l; }

    /* Vertical */
    .uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin { margin-top: (@grid-large-gutter-vertical-l * 2); }

    .uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin::before {
        top: -@grid-large-gutter-vertical-l;
        left: (@grid-large-gutter-horizontal-l * 2);
    }

}


/* Match child of a grid cell
 ========================================================================== */

/*
 * Behave like a block element
 * 1. Wrap into the next line
 * 2. Take the full width, at least 100%. Only if no class from the Width component is set.
 * 3. Expand width even if larger than 100%, e.g. because of negative margin (Needed for nested grids)
 */

.uk-grid-match > *,
.uk-grid-item-match {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
}

.uk-grid-match > * > :not([class*='uk-width']),
.uk-grid-item-match > :not([class*='uk-width']) {
    /* 2 */
    box-sizing: border-box;
    width: 100%;
    /* 3 */
    flex: auto;
}


// Hooks
// ========================================================================

.hook-grid-misc;

.hook-grid-misc() {}


// Inverse
// ========================================================================

@inverse-grid-divider-border:                  @inverse-global-border;

.hook-inverse() {

    .uk-grid-divider > :not(.uk-first-column)::before { border-left-color: @inverse-grid-divider-border; }
    .uk-grid-divider.uk-grid-stack > .uk-grid-margin::before { border-top-color: @inverse-grid-divider-border; }

}

// Name:            Tile
// Description:     Component to create tiled boxes
//
// Component:       `uk-tile`
//
// Modifiers:       `uk-tile-xsmall`
//                  `uk-tile-small`
//                  `uk-tile-large`
//                  `uk-tile-xlarge`
//                  `uk-tile-default`
//                  `uk-tile-muted`
//                  `uk-tile-primary`
//                  `uk-tile-secondary`
//
// States:          `uk-preserve-color`
//
// ========================================================================


// Variables
// ========================================================================

@tile-padding-horizontal:                      15px;
@tile-padding-horizontal-s:                    @global-gutter;
@tile-padding-horizontal-m:                    @global-medium-gutter;
@tile-padding-vertical:                        @global-medium-margin;
@tile-padding-vertical-m:                      @global-large-margin;

@tile-xsmall-padding-vertical:                 @global-margin;

@tile-small-padding-vertical:                  @global-medium-margin;

@tile-large-padding-vertical:                  @global-large-margin;
@tile-large-padding-vertical-m:                @global-xlarge-margin;

@tile-xlarge-padding-vertical:                 @global-xlarge-margin;
@tile-xlarge-padding-vertical-m:               (@global-large-margin + @global-xlarge-margin);

@tile-default-background:                      @global-background;

@tile-muted-background:                        @global-muted-background;

@tile-primary-background:                      @global-primary-background;
@tile-primary-color-mode:                      light;

@tile-secondary-background:                    @global-secondary-background;
@tile-secondary-color-mode:                    light;


/* ========================================================================
   Component: Tile
 ========================================================================== */

.uk-tile {
    position: relative;
    box-sizing: border-box;
    padding-left: @tile-padding-horizontal;
    padding-right: @tile-padding-horizontal;
    padding-top: @tile-padding-vertical;
    padding-bottom: @tile-padding-vertical;
    .hook-tile;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-tile {
        padding-left: @tile-padding-horizontal-s;
        padding-right: @tile-padding-horizontal-s;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-tile {
        padding-left: @tile-padding-horizontal-m;
        padding-right: @tile-padding-horizontal-m;
        padding-top: @tile-padding-vertical-m;
        padding-bottom: @tile-padding-vertical-m;
    }

}

/*
 * Micro clearfix
 */

.uk-tile::before,
.uk-tile::after {
    content: "";
    display: table;
}

.uk-tile::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-tile > :last-child { margin-bottom: 0; }


/* Size modifiers
 ========================================================================== */

/*
 * XSmall
 */

.uk-tile-xsmall {
    padding-top: @tile-xsmall-padding-vertical;
    padding-bottom: @tile-xsmall-padding-vertical;
}

/*
 * Small
 */

.uk-tile-small {
    padding-top: @tile-small-padding-vertical;
    padding-bottom: @tile-small-padding-vertical;
}

/*
 * Large
 */

.uk-tile-large {
    padding-top: @tile-large-padding-vertical;
    padding-bottom: @tile-large-padding-vertical;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-tile-large {
        padding-top: @tile-large-padding-vertical-m;
        padding-bottom: @tile-large-padding-vertical-m;
    }

}


/*
 * XLarge
 */

.uk-tile-xlarge {
    padding-top: @tile-xlarge-padding-vertical;
    padding-bottom: @tile-xlarge-padding-vertical;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-tile-xlarge {
        padding-top: @tile-xlarge-padding-vertical-m;
        padding-bottom: @tile-xlarge-padding-vertical-m;
    }

}


/* Style modifiers
 ========================================================================== */

/*
 * Default
 */

.uk-tile-default {
    background: @tile-default-background;
    .hook-tile-default;
}

/*
 * Muted
 */

.uk-tile-muted {
    background: @tile-muted-background;
    .hook-tile-muted;
}

/*
 * Primary
 */

.uk-tile-primary {
    background: @tile-primary-background;
    .hook-tile-primary;
}

// Color Mode
.uk-tile-primary:not(.uk-preserve-color):extend(.uk-light all) when (@tile-primary-color-mode = light) {}
.uk-tile-primary:not(.uk-preserve-color):extend(.uk-dark all) when (@tile-primary-color-mode = dark) {}

/*
 * Secondary
 */

.uk-tile-secondary {
    background: @tile-secondary-background;
    .hook-tile-secondary;
}

// Color Mode
.uk-tile-secondary:not(.uk-preserve-color):extend(.uk-light all) when (@tile-secondary-color-mode = light) {}
.uk-tile-secondary:not(.uk-preserve-color):extend(.uk-dark all) when (@tile-secondary-color-mode = dark) {}


// Hooks
// ========================================================================

.hook-tile-misc;

.hook-tile() {}
.hook-tile-default() {}
.hook-tile-muted() {}
.hook-tile-primary() {}
.hook-tile-secondary() {}
.hook-tile-misc() {}

// Name:            Card
// Description:     Component to create boxed content containers
//
// Component:       `uk-card`
//
// Sub-objects:     `uk-card-body`
//                  `uk-card-header`
//                  `uk-card-footer`
//                  `uk-card-media-*`
//                  `uk-card-title`
//                  `uk-card-badge`
//
// Modifiers:       `uk-card-hover`
//                  `uk-card-default`
//                  `uk-card-primary`
//                  `uk-card-secondary`
//                  `uk-card-small`
//                  `uk-card-large`
//
// Uses:            `uk-grid-stack`
//
// ========================================================================


// Variables
// ========================================================================

@card-body-padding-horizontal:                 @global-gutter;
@card-body-padding-vertical:                   @global-gutter;

@card-body-padding-horizontal-l:               @global-medium-gutter;
@card-body-padding-vertical-l:                 @global-medium-gutter;

@card-header-padding-horizontal:               @global-gutter;
@card-header-padding-vertical:                 round(@global-gutter / 2);

@card-header-padding-horizontal-l:             @global-medium-gutter;
@card-header-padding-vertical-l:               round(@global-medium-gutter / 2);

@card-footer-padding-horizontal:               @global-gutter;
@card-footer-padding-vertical:                 (@global-gutter / 2);

@card-footer-padding-horizontal-l:             @global-medium-gutter;
@card-footer-padding-vertical-l:               round(@global-medium-gutter / 2);

@card-title-font-size:                         @global-large-font-size;
@card-title-line-height:                       1.4;

@card-badge-top:                               @global-gutter;
@card-badge-right:                             @card-badge-top;

@card-hover-background:                        @global-muted-background;

@card-default-background:                      @global-muted-background;
@card-default-color:                           @global-color;
@card-default-title-color:                     @global-emphasis-color;
@card-default-hover-background:                darken(@card-default-background, 5%);

@card-primary-background:                      @global-primary-background;
@card-primary-color:                           @global-inverse-color;
@card-primary-title-color:                     @card-primary-color;
@card-primary-hover-background:                darken(@card-primary-background, 5%);
@card-primary-color-mode:                      light;

@card-secondary-background:                    @global-secondary-background;
@card-secondary-color:                         @global-inverse-color;
@card-secondary-title-color:                   @card-secondary-color;
@card-secondary-hover-background:              darken(@card-secondary-background, 5%);
@card-secondary-color-mode:                    light;

@card-small-body-padding-horizontal:           @global-margin;
@card-small-body-padding-vertical:             @global-margin;
@card-small-header-padding-horizontal:         @global-margin;
@card-small-header-padding-vertical:           round(@global-margin / 1.5);
@card-small-footer-padding-horizontal:         @global-margin;
@card-small-footer-padding-vertical:           round(@global-margin / 1.5);

@card-large-body-padding-horizontal-l:         @global-large-gutter;
@card-large-body-padding-vertical-l:           @global-large-gutter;
@card-large-header-padding-horizontal-l:       @global-large-gutter;
@card-large-header-padding-vertical-l:         round(@global-large-gutter / 2);
@card-large-footer-padding-horizontal-l:       @global-large-gutter;
@card-large-footer-padding-vertical-l:         round(@global-large-gutter / 2);


/* ========================================================================
   Component: Card
 ========================================================================== */

.uk-card {
    position: relative;
    box-sizing: border-box;
    .hook-card;
}


/* Sections
 ========================================================================== */

.uk-card-body {
    padding: @card-body-padding-vertical @card-body-padding-horizontal;
    .hook-card-body;
}

.uk-card-header {
    padding: @card-header-padding-vertical @card-header-padding-horizontal;
    .hook-card-header;
}

.uk-card-footer {
    padding: @card-footer-padding-vertical @card-footer-padding-horizontal;
    .hook-card-footer;
}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-card-body { padding: @card-body-padding-vertical-l @card-body-padding-horizontal-l; }

    .uk-card-header { padding: @card-header-padding-vertical-l @card-header-padding-horizontal-l; }

    .uk-card-footer { padding: @card-footer-padding-vertical-l @card-footer-padding-horizontal-l; }

}

/*
 * Micro clearfix
 */

.uk-card-body::before,
.uk-card-body::after,
.uk-card-header::before,
.uk-card-header::after,
.uk-card-footer::before,
.uk-card-footer::after {
    content: "";
    display: table;
}

.uk-card-body::after,
.uk-card-header::after,
.uk-card-footer::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-card-body > :last-child,
.uk-card-header > :last-child,
.uk-card-footer > :last-child { margin-bottom: 0; }


/* Media
 ========================================================================== */

/*
 * Reserved alignment modifier to style the media element, e.g. with `border-radius`
 * Implemented by the theme
 */

[class*='uk-card-media'] {
    .hook-card-media;
}

.uk-card-media-top,
.uk-grid-stack > .uk-card-media-left,
.uk-grid-stack > .uk-card-media-right  {
    .hook-card-media-top;
}

.uk-card-media-bottom {
    .hook-card-media-bottom;
}

:not(.uk-grid-stack) > .uk-card-media-left {
    .hook-card-media-left;
}

:not(.uk-grid-stack) > .uk-card-media-right {
    .hook-card-media-right;
}


/* Title
 ========================================================================== */

.uk-card-title {
    font-size: @card-title-font-size;
    line-height: @card-title-line-height;
    .hook-card-title;
}


/* Badge
 ========================================================================== */

.uk-card-badge {
    position: absolute;
    top: @card-badge-top;
    right: @card-badge-right;
    z-index: 1;
    .hook-card-badge;
}

/*
 * Remove margin from adjacent element
 */

.uk-card-badge:first-child + * { margin-top: 0; }


/* Hover modifier
 ========================================================================== */

.uk-card-hover:not(.uk-card-default):not(.uk-card-primary):not(.uk-card-secondary):hover {
    background: @card-hover-background;
    .hook-card-hover;
}


/* Style modifiers
 ========================================================================== */

/*
 * Default
 * Note: Header and Footer are only implemented for the default style
 */

.uk-card-default {
    background: @card-default-background;
    color: @card-default-color;
    .hook-card-default;
}

.uk-card-default .uk-card-title {
    color: @card-default-title-color;
    .hook-card-default-title;
}

.uk-card-default.uk-card-hover:hover {
    background-color: @card-default-hover-background;
    .hook-card-default-hover;
}

.uk-card-default .uk-card-header {
    .hook-card-default-header;
}

.uk-card-default .uk-card-footer {
    .hook-card-default-footer;
}

/*
 * Primary
 */

.uk-card-primary {
    background: @card-primary-background;
    color: @card-primary-color;
    .hook-card-primary;
}

.uk-card-primary .uk-card-title {
    color: @card-primary-title-color;
    .hook-card-primary-title;
}

.uk-card-primary.uk-card-hover:hover {
    background-color: @card-primary-hover-background;
    .hook-card-primary-hover;
}

// Color Mode
.uk-card-primary.uk-card-body:extend(.uk-light all) when (@card-primary-color-mode = light) {}
.uk-card-primary > :not([class*='uk-card-media']):extend(.uk-light all) when (@card-primary-color-mode = light) {}
.uk-card-primary.uk-card-body:extend(.uk-dark all) when (@card-primary-color-mode = dark) {}
.uk-card-primary > :not([class*='uk-card-media']):extend(.uk-dark all) when (@card-primary-color-mode = dark) {}

/*
 * Secondary
 */

.uk-card-secondary {
    background: @card-secondary-background;
    color: @card-secondary-color;
    .hook-card-secondary;
}

.uk-card-secondary .uk-card-title {
    color: @card-secondary-title-color;
    .hook-card-secondary-title;
}

.uk-card-secondary.uk-card-hover:hover {
    background-color: @card-secondary-hover-background;
    .hook-card-secondary-hover;
}

// Color Mode
.uk-card-secondary.uk-card-body:extend(.uk-light all) when (@card-secondary-color-mode = light) {}
.uk-card-secondary > :not([class*='uk-card-media']):extend(.uk-light all) when (@card-secondary-color-mode = light) {}
.uk-card-secondary.uk-card-body:extend(.uk-dark all) when (@card-secondary-color-mode = dark) {}
.uk-card-secondary > :not([class*='uk-card-media']):extend(.uk-dark all) when (@card-secondary-color-mode = dark) {}


/* Size modifier
 ========================================================================== */

/*
 * Small
 */

.uk-card-small.uk-card-body,
.uk-card-small .uk-card-body { padding: @card-small-body-padding-vertical @card-small-body-padding-horizontal; }

.uk-card-small .uk-card-header { padding: @card-small-header-padding-vertical @card-small-header-padding-horizontal; }
.uk-card-small .uk-card-footer { padding: @card-small-footer-padding-vertical @card-small-footer-padding-horizontal; }

/*
 * Large
 */

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-card-large.uk-card-body,
    .uk-card-large .uk-card-body { padding: @card-large-body-padding-vertical-l @card-large-body-padding-horizontal-l; }

    .uk-card-large .uk-card-header { padding: @card-large-header-padding-vertical-l @card-large-header-padding-horizontal-l; }
    .uk-card-large .uk-card-footer { padding: @card-large-footer-padding-vertical-l @card-large-footer-padding-horizontal-l; }

}


// Hooks
// ========================================================================

.hook-card-misc;

.hook-card() {}
.hook-card-body() {}
.hook-card-header() {}
.hook-card-footer() {}
.hook-card-media() {}
.hook-card-media-top() {}
.hook-card-media-bottom() {}
.hook-card-media-left() {}
.hook-card-media-right() {}
.hook-card-title() {}
.hook-card-badge() {}
.hook-card-hover() {}
.hook-card-default() {}
.hook-card-default-title() {}
.hook-card-default-hover() {}
.hook-card-default-header() {}
.hook-card-default-footer() {}
.hook-card-primary() {}
.hook-card-primary-title() {}
.hook-card-primary-hover() {}
.hook-card-secondary() {}
.hook-card-secondary-title() {}
.hook-card-secondary-hover() {}
.hook-card-misc() {}

// Name:            Close
// Description:     Component to create a close button
//
// Component:       `uk-close`
//
// ========================================================================


// Variables
// ========================================================================

@close-color:                                   @global-muted-color;
@close-hover-color:                             @global-color;


/* ========================================================================
   Component: Close
 ========================================================================== */

/*
 * Adopts `uk-icon`
 */

.uk-close {
    color: @close-color;
    .hook-close;
}

/* Hover + Focus */
.uk-close:hover,
.uk-close:focus {
    color: @close-hover-color;
    outline: none;
    .hook-close-hover;
}


// Hooks
// ========================================================================

.hook-close-misc;

.hook-close() {}
.hook-close-hover() {}
.hook-close-misc() {}


// Inverse
// ========================================================================

@inverse-close-color:                           @inverse-global-muted-color;
@inverse-close-hover-color:                     @inverse-global-color;

.hook-inverse() {

    .uk-close {
        color: @inverse-close-color;
        .hook-inverse-close;
    }

    .uk-close:hover,
    .uk-close:focus {
        color: @inverse-close-hover-color;
        .hook-inverse-close-hover;
    }

}

.hook-inverse-close() {}
.hook-inverse-close-hover() {}

// Name:            Spinner
// Description:     Component to create a loading spinner
//
// Component:       `uk-spinner`
//
// ========================================================================


// Variables
// ========================================================================

@spinner-size:                                  30px;
@spinner-stroke-width:                          1;
@spinner-radius:                                floor((@spinner-size - @spinner-stroke-width) / 2); // Minus stroke width to prevent overflow clipping
@spinner-circumference:                         round(2 * 3.141 * @spinner-radius);
@spinner-duration:                              1.4s;


/* ========================================================================
   Component: Spinner
 ========================================================================== */

/*
 * Adopts `uk-icon`
 */

.uk-spinner {
    .hook-spinner;
}


/* SVG
 ========================================================================== */

.uk-spinner > * { animation: uk-spinner-rotate @spinner-duration linear infinite; }

@keyframes uk-spinner-rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(270deg); }
}

/*
 * Circle
 */

.uk-spinner > * > * {
    stroke-dasharray: @spinner-circumference;
    stroke-dashoffset: 0;
    transform-origin: center;
    animation: uk-spinner-dash @spinner-duration ease-in-out infinite;
    stroke-width: @spinner-stroke-width;
    stroke-linecap: round;
}

@keyframes uk-spinner-dash {
    0% { stroke-dashoffset: @spinner-circumference; }
    50% {
        stroke-dashoffset: @spinner-circumference/4;
        transform:rotate(135deg);
    }
    100% {
        stroke-dashoffset: @spinner-circumference;
        transform:rotate(450deg);
    }
}


// Hooks
// ========================================================================

.hook-spinner-misc;

.hook-spinner() {}
.hook-spinner-misc() {}

// Name:            Totop
// Description:     Component to create an icon to scroll back to top
//
// Component:       `uk-totop`
//
// ========================================================================


// Variables
// ========================================================================

@totop-padding:                                 5px;
@totop-color:                                   @global-muted-color;

@totop-hover-color:                             @global-color;

@totop-active-color:                            @global-emphasis-color;


/* ========================================================================
   Component: Totop
 ========================================================================== */

/*
 * Addopts `uk-icon`
 */

.uk-totop {
    padding: @totop-padding;
    color: @totop-color;
    .hook-totop;
}

/* Hover + Focus */
.uk-totop:hover,
.uk-totop:focus {
    color: @totop-hover-color;
    outline: none;
    .hook-totop-hover;
}

/* OnClick */
.uk-totop:active {
    color: @totop-active-color;
    .hook-totop-active;
}


// Hooks
// ========================================================================

.hook-totop-misc;

.hook-totop() {}
.hook-totop-hover() {}
.hook-totop-active() {}
.hook-totop-misc() {}


// Inverse
// ========================================================================

@inverse-totop-color:                       @inverse-global-muted-color;
@inverse-totop-hover-color:                 @inverse-global-color;
@inverse-totop-active-color:                @inverse-global-emphasis-color;

.hook-inverse() {

    .uk-totop {
        color: @inverse-totop-color;
        .hook-inverse-totop;
    }

    .uk-totop:hover,
    .uk-totop:focus {
        color: @inverse-totop-hover-color;
        .hook-inverse-totop-hover;
    }

    .uk-totop:active {
        color: @inverse-totop-active-color;
        .hook-inverse-totop-active;
    }

}

.hook-inverse-totop() {}
.hook-inverse-totop-hover() {}
.hook-inverse-totop-active() {}

// Name:            Marker
// Description:     Component to create a marker icon
//
// Component:       `uk-marker`
//
// ========================================================================


// Variables
// ========================================================================

@marker-padding:                                 5px;
@marker-background:                              @global-secondary-background;
@marker-color:                                   @global-inverse-color;

@marker-hover-color:                             @global-inverse-color;


/* ========================================================================
   Component: Marker
 ========================================================================== */

/*
 * Addopts `uk-icon`
 */

.uk-marker {
    padding: @marker-padding;
    background: @marker-background;
    color: @marker-color;
    .hook-marker;
}

/* Hover + Focus */
.uk-marker:hover,
.uk-marker:focus {
    color: @marker-hover-color;
    outline: none;
    .hook-marker-hover;
}


// Hooks
// ========================================================================

.hook-marker-misc;

.hook-marker() {}
.hook-marker-hover() {}
.hook-marker-misc() {}


// Inverse
// ========================================================================

@inverse-marker-background:                  @global-muted-background;
@inverse-marker-color:                       @global-color;
@inverse-marker-hover-color:                 @global-color;

.hook-inverse() {

    .uk-marker {
        background: @inverse-marker-background;
        color: @inverse-marker-color;
        .hook-inverse-marker;
    }

    .uk-marker:hover,
    .uk-marker:focus {
        color: @inverse-marker-hover-color;
        .hook-inverse-marker-hover;
    }

}

.hook-inverse-marker() {}
.hook-inverse-marker-hover() {}

// Name:            Alert
// Description:     Component to create alert messages
//
// Component:       `uk-alert`
//
// Adopted:         `uk-alert-close`
//
// Modifiers:       `uk-alert-primary`
//                  `uk-alert-success`
//                  `uk-alert-warning`
//                  `uk-alert-danger`
//
// ========================================================================


// Variables
// ========================================================================

@alert-margin-vertical:                         @global-margin;
@alert-padding:                                 @global-small-gutter;
@alert-padding-right:                           @alert-padding + 14px;
@alert-background:                              @global-muted-background;
@alert-color:                                   @global-color;

@alert-close-top:                               @alert-padding + 5px;
@alert-close-right:                             @alert-padding;

@alert-primary-background:                      lighten(tint(@global-primary-background, 40%), 20%);
@alert-primary-color:                           @global-primary-background;

@alert-success-background:                      lighten(tint(@global-success-background, 40%), 25%);
@alert-success-color:                           @global-success-background;

@alert-warning-background:                      lighten(tint(@global-warning-background, 45%), 15%);
@alert-warning-color:                           @global-warning-background;

@alert-danger-background:                       lighten(tint(@global-danger-background, 40%), 20%);
@alert-danger-color:                            @global-danger-background;


/* ========================================================================
   Component: Alert
 ========================================================================== */

.uk-alert {
    position: relative;
    margin-bottom: @alert-margin-vertical;
    padding: @alert-padding @alert-padding-right @alert-padding @alert-padding;
    background: @alert-background;
    color: @alert-color;
    .hook-alert;
}

/* Add margin if adjacent element */
* + .uk-alert { margin-top: @alert-margin-vertical; }

/*
 * Remove margin from the last-child
 */

.uk-alert > :last-child { margin-bottom: 0; }


/* Close
 * Adopts `uk-close`
 ========================================================================== */

.uk-alert-close {
    position: absolute;
    top: @alert-close-top;
    right: @alert-close-right;
    .hook-alert-close;
}

/*
 * Remove margin from adjacent element
 */

.uk-alert-close:first-child + * { margin-top: 0; }

/*
 * Hover + Focus
 */

.uk-alert-close:hover,
.uk-alert-close:focus {
    .hook-alert-close-hover;
}


/* Style modifiers
 ========================================================================== */

/*
 * Primary
 */

.uk-alert-primary {
    background: @alert-primary-background;
    color: @alert-primary-color;
    .hook-alert-primary;
}

/*
 * Success
 */

.uk-alert-success {
    background: @alert-success-background;
    color: @alert-success-color;
    .hook-alert-success;
}

/*
 * Warning
 */

.uk-alert-warning {
    background: @alert-warning-background;
    color: @alert-warning-color;
    .hook-alert-warning;
}

/*
 * Danger
 */

.uk-alert-danger {
    background: @alert-danger-background;
    color: @alert-danger-color;
    .hook-alert-danger;
}


// Hooks
// ========================================================================

.hook-alert-misc;

.hook-alert() {}
.hook-alert-close() {}
.hook-alert-close-hover() {}
.hook-alert-primary() {}
.hook-alert-success() {}
.hook-alert-warning() {}
.hook-alert-danger() {}
.hook-alert-misc() {}
// Name:            Badge
// Description:     Component to create notification badges

// Component:       `uk-badge`
//
// ========================================================================


// Variables
// ========================================================================

@badge-size:                                    22px;
@badge-padding-vertical:                        0;
@badge-padding-horizontal:                      5px;
@badge-border-radius:                           500px;
@badge-background:                              @global-primary-background;
@badge-color:                                   @global-inverse-color;
@badge-font-size:                               @global-small-font-size;

@badge-hover-color:                             @global-inverse-color;


/* ========================================================================
   Component: Badge
 ========================================================================== */

/*
 * 1. Style
 * 2. Center child vertically and horizontally
 */

.uk-badge {
    box-sizing: border-box;
    min-width: @badge-size;
    height: @badge-size;
    padding: @badge-padding-vertical @badge-padding-horizontal;
    border-radius: @badge-border-radius;
    vertical-align: middle;
    /* 1 */
    background: @badge-background;
    color: @badge-color;
    font-size: @badge-font-size;
    /* 2 */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    .hook-badge;
}

/*
 * Required for `a`
 */

.uk-badge:hover,
.uk-badge:focus {
    color: @badge-hover-color;
    text-decoration: none;
    outline: none;
    .hook-badge-hover;
}


// Hooks
// ========================================================================

.hook-badge-misc;

.hook-badge() {}
.hook-badge-hover() {}
.hook-badge-misc() {}


// Inverse
// ========================================================================

@inverse-badge-background:                     @inverse-global-primary-background;
@inverse-badge-color:                          @inverse-global-inverse-color;
@inverse-badge-hover-color:                    @inverse-global-inverse-color;

.hook-inverse() {

    .uk-badge {
        background-color: @inverse-badge-background;
        color: @inverse-badge-color;
        .hook-inverse-badge;
    }

    .uk-badge:hover,
    .uk-badge:focus {
        color: @inverse-badge-hover-color;
        .hook-inverse-badge-hover;
    }

}

.hook-inverse-badge() {}
.hook-inverse-badge-hover() {}
// Name:            Label
// Description:     Component to indicate important notes
//
// Component:       `uk-label`
//
// Modifiers:       `uk-label-success`
//                  `uk-label-warning`
//                  `uk-label-danger`
//
// ========================================================================


// Variables
// ========================================================================

@label-padding-vertical:                        0;
@label-padding-horizontal:                      @global-small-margin;
@label-background:                              @global-primary-background;
@label-line-height:                             @global-line-height;
@label-font-size:                               @global-small-font-size;
@label-color:                                   @global-inverse-color;

@label-success-background:                      @global-success-background;
@label-success-color:                           @global-inverse-color;
@label-warning-background:                      @global-warning-background;
@label-warning-color:                           @global-inverse-color;
@label-danger-background:                       @global-danger-background;
@label-danger-color:                            @global-inverse-color;


/* ========================================================================
   Component: Label
 ========================================================================== */

.uk-label {
    display: inline-block;
    padding: @label-padding-vertical @label-padding-horizontal;
    background: @label-background;
    line-height: @label-line-height;
    font-size: @label-font-size;
    color: @label-color;
    vertical-align: middle;
    white-space: nowrap;
    .hook-label;
}


/* Color modifiers
 ========================================================================== */

/*
 * Success
 */

.uk-label-success {
    background-color: @label-success-background;
    color: @label-success-color;
    .hook-label-success;
}

/*
 * Warning
 */

.uk-label-warning {
    background-color: @label-warning-background;
    color: @label-warning-color;
    .hook-label-warning;
}

/*
 * Danger
 */

.uk-label-danger {
    background-color: @label-danger-background;
    color: @label-danger-color;
    .hook-label-danger;
}


// Hooks
// ========================================================================

.hook-label-misc;

.hook-label() {}
.hook-label-success() {}
.hook-label-warning() {}
.hook-label-danger() {}
.hook-label-misc() {}


// Inverse
// ========================================================================

@inverse-label-background:                     @inverse-global-primary-background;
@inverse-label-color:                          @inverse-global-inverse-color;

.hook-inverse() {

    .uk-label {
        background-color: @inverse-label-background;
        color: @inverse-label-color;
        .hook-inverse-label;
    }

}

.hook-inverse-label() {}
// Name:            Overlay
// Description:     Component to create content areas overlaying an image
//
// Component:       `uk-overlay`
//
// Adopted:         `uk-overlay-icon`
//
// Modifier:        `uk-overlay-default`
//                  `uk-overlay-primary`
//
// ========================================================================


// Variables
// ========================================================================

@overlay-padding-horizontal:                    @global-gutter;
@overlay-padding-vertical:                      @global-gutter;

@overlay-default-background:                    fade(@global-background, 80%);

@overlay-primary-background:                    fade(@global-secondary-background, 80%);
@overlay-primary-color-mode:                    light;


/* ========================================================================
   Component: Overlay
 ========================================================================== */

.uk-overlay {
    padding: @overlay-padding-vertical @overlay-padding-horizontal;
    .hook-overlay;
}

/*
 * Remove margin from the last-child
 */

.uk-overlay > :last-child { margin-bottom: 0; }


/* Icon
 ========================================================================== */

.uk-overlay-icon {
    .hook-overlay-icon;
}


/* Style modifiers
 ========================================================================== */

/*
 * Default
 */

.uk-overlay-default {
    background: @overlay-default-background;
    .hook-overlay-default;
}

/*
 * Primary
 */

.uk-overlay-primary {
    background: @overlay-primary-background;
    .hook-overlay-primary;
}

// Color Mode
.uk-overlay-primary:extend(.uk-light all) when (@overlay-primary-color-mode = light) {}
.uk-overlay-primary:extend(.uk-dark all) when (@overlay-primary-color-mode = dark) {}


// Hooks
// ========================================================================

.hook-overlay-misc;

.hook-overlay() {}
.hook-overlay-icon() {}
.hook-overlay-default() {}
.hook-overlay-primary() {}
.hook-overlay-misc() {}

// Name:            Article
// Description:     Component to create articles
//
// Component:       `uk-article`
//
// Sub-objects:     `uk-article-title`
//                  `uk-article-meta`
//
// ========================================================================


// Variables
// ========================================================================

@article-margin-top:                            @global-large-margin;

@article-title-font-size:                       @global-xxlarge-font-size;
@article-title-line-height:                     1.2;

@article-meta-font-size:                        @global-small-font-size;
@article-meta-line-height:                      1.4;
@article-meta-color:                            @global-muted-color;


/* ========================================================================
   Component: Article
 ========================================================================== */

.uk-article {
    .hook-article;
}

/*
 * Micro clearfix
 */

.uk-article::before,
.uk-article::after {
    content: "";
    display: table;
}

.uk-article::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-article > :last-child { margin-bottom: 0; }


/* Adjacent sibling
 ========================================================================== */

.uk-article + .uk-article {
    margin-top: @article-margin-top;
    .hook-article-adjacent;
}


/* Title
 ========================================================================== */

.uk-article-title {
    font-size: @article-title-font-size;
    line-height: @article-title-line-height;
    .hook-article-title;
}


/* Meta
 ========================================================================== */

.uk-article-meta {
    font-size: @article-meta-font-size;
    line-height: @article-meta-line-height;
    color: @article-meta-color;
    .hook-article-meta;
}


// Hooks
// ========================================================================

.hook-article-misc;

.hook-article() {}
.hook-article-adjacent() {}
.hook-article-title() {}
.hook-article-meta() {}
.hook-article-misc() {}


// Inverse
// ========================================================================

@inverse-article-meta-color:                   @inverse-global-muted-color;

.hook-inverse() {

    .uk-article-title  {
        .hook-inverse-article-title;
    }

    .uk-article-meta  {
        color: @inverse-article-meta-color;
        .hook-inverse-article-meta;
    }

}

.hook-inverse-article-title() {}
.hook-inverse-article-meta() {}
// Name:            Comment
// Description:     Component to create nested comments
//
// Component:       `uk-comment`
//
// Sub-objects:     `uk-comment-body`
//                  `uk-comment-header`
//                  `uk-comment-title`
//                  `uk-comment-meta`
//                  `uk-comment-avatar`
//                  `uk-comment-list`
//
// Modifier:        `uk-comment-primary`
//
// ========================================================================


// Variables
// ========================================================================

@comment-header-margin-bottom:                  @global-margin;

@comment-title-font-size:                       @global-medium-font-size;
@comment-title-line-height:                     1.4;

@comment-meta-font-size:                        @global-small-font-size;
@comment-meta-line-height:                      1.4;
@comment-meta-color:                            @global-muted-color;

@comment-list-margin-top:                       @global-large-margin;
@comment-list-padding-left:                     30px;
@comment-list-padding-left-m:                   100px;


/* ========================================================================
   Component: Comment
 ========================================================================== */

.uk-comment {
    .hook-comment;
}


/* Sections
 ========================================================================== */

.uk-comment-body {
    .hook-comment-body;
}

.uk-comment-header {
    margin-bottom: @comment-header-margin-bottom;
    .hook-comment-header;
}

/*
 * Micro clearfix
 */

.uk-comment-body::before,
.uk-comment-body::after,
.uk-comment-header::before,
.uk-comment-header::after {
    content: "";
    display: table;
}

.uk-comment-body::after,
.uk-comment-header::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-comment-body > :last-child,
.uk-comment-header > :last-child { margin-bottom: 0; }


/* Title
 ========================================================================== */

.uk-comment-title {
    font-size: @comment-title-font-size;
    line-height: @comment-title-line-height;
    .hook-comment-title;
}


/* Meta
 ========================================================================== */

.uk-comment-meta {
    font-size: @comment-meta-font-size;
    line-height: @comment-meta-line-height;
    color: @comment-meta-color;
    .hook-comment-meta;
}


/* Avatar
 ========================================================================== */

.uk-comment-avatar {
    .hook-comment-avatar;
}


/* List
 ========================================================================== */

.uk-comment-list {
    padding: 0;
    list-style: none;
}

/* Adjacent siblings */
.uk-comment-list > :nth-child(n+2) {
    margin-top: @comment-list-margin-top;
    .hook-comment-list-adjacent;
}

/*
 * Sublists
 * Note: General sibling selector allows reply block between comment and sublist
 */

.uk-comment-list .uk-comment ~ ul {
    margin: @comment-list-margin-top 0 0 0;
    padding-left: @comment-list-padding-left;
    list-style: none;
    .hook-comment-list-sub;
}

/* Tablet and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-comment-list .uk-comment ~ ul { padding-left: @comment-list-padding-left-m; }

}

/* Adjacent siblings */
.uk-comment-list .uk-comment ~ ul > :nth-child(n+2) {
    margin-top: @comment-list-margin-top;
    .hook-comment-list-sub-adjacent;
}


/* Style modifier
 ========================================================================== */

.uk-comment-primary {
    .hook-comment-primary;
}


// Hooks
// ========================================================================

.hook-comment-misc;

.hook-comment() {}
.hook-comment-body() {}
.hook-comment-header() {}
.hook-comment-title() {}
.hook-comment-meta() {}
.hook-comment-avatar() {}
.hook-comment-list-adjacent() {}
.hook-comment-list-sub() {}
.hook-comment-list-sub-adjacent() {}
.hook-comment-primary() {}
.hook-comment-misc() {}
// Name:            Search
// Description:     Component to create the search
//
// Component:       `uk-search`
//
// Sub-objects:     `uk-search-input`
//                  `uk-search-toggle`
//
// Adopted:         `uk-search-icon`
//
// Modifier:        `uk-search-default`
//                  `uk-search-navbar`
//                  `uk-search-large`
//
// ========================================================================


// Variables
// ========================================================================

@search-color:                                      @global-color;
@search-placeholder-color:                          @global-muted-color;

@search-icon-color:                                 @global-muted-color;

@search-default-width:                              180px;
@search-default-height:                             @global-control-height;
@search-default-padding-horizontal:                 6px;
@search-default-background:                         @global-muted-background;
@search-default-focus-background:                   @search-default-background;

@search-default-icon-width:                         @global-control-height;

@search-navbar-width:                               400px;
@search-navbar-height:                              40px;
@search-navbar-background:                          transparent;
@search-navbar-font-size:                           @global-large-font-size;

@search-navbar-icon-width:                          40px;

@search-large-width:                                500px;
@search-large-height:                               80px;
@search-large-background:                           transparent;
@search-large-font-size:                            @global-xxlarge-font-size;

@search-large-icon-width:                           80px;

@search-toggle-color:                               @global-muted-color;
@search-toggle-hover-color:                         @global-color;


/* ========================================================================
   Component: Search
 ========================================================================== */

/*
 * 1. Container fits its content
 * 2. Create position context
 * 3. Prevent content overflow
 * 4. Reset `form`
 */

.uk-search {
    /* 1 */
    display: inline-block;
    /* 2 */
    position: relative;
    /* 3 */
    max-width: 100%;
    /* 4 */
    margin: 0;
}


/* Input
 ========================================================================== */

/*
 * Remove the inner padding and cancel buttons in Chrome on OS X and Safari on OS X.
 */

.uk-search-input::-webkit-search-cancel-button,
.uk-search-input::-webkit-search-decoration { -webkit-appearance: none; }

/*
 * Removes placeholder transparency in Firefox.
 */

.uk-search-input::-moz-placeholder { opacity: 1; }

/*
 * 1. Define consistent box sizing.
 * 2. Address margins set differently in Firefox/IE and Chrome/Safari/Opera.
 * 3. Remove `border-radius` in iOS.
 * 4. Change font properties to `inherit` in all browsers
 * 5. Show the overflow in Edge.
 * 6. Remove default style in iOS.
 * 7. Vertical alignment
 * 8. Take the full container width
 * 9. Style
 */

.uk-search-input {
    /* 1 */
    box-sizing: border-box;
    /* 2 */
    margin: 0;
    /* 3 */
    border-radius: 0;
    /* 4 */
    font: inherit;
    /* 5 */
    overflow: visible;
    /* 6 */
    -webkit-appearance: none;
    /* 7 */
    vertical-align: middle;
    /* 8 */
    width: 100%;
    /* 9 */
    border: none;
    color: @search-color;
    .hook-search-input;
}

.uk-search-input:focus { outline: none; }

/* Placeholder */
.uk-search-input:-ms-input-placeholder { color: @search-placeholder-color !important; }
.uk-search-input::placeholder { color: @search-placeholder-color; }


/* Icon (Adopts `uk-icon`)
 ========================================================================== */

/*
 * Remove default focus style
 */

.uk-search-icon:focus { outline: none; }

/*
 * Position above input
 * 1. Set position
 * 2. Center icon vertically and horizontally
 * 3. Style
 */

.uk-search .uk-search-icon {
    /* 1 */
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    /* 2 */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    /* 3 */
    color: @search-icon-color;
}

/*
 * Required for `a`.
 */

.uk-search .uk-search-icon:hover { color: @search-icon-color; }

/*
 * Make `input` element clickable through icon, e.g. if it's a `span`
 */

.uk-search .uk-search-icon:not(a):not(button):not(input) { pointer-events: none; }

/*
 * Position modifier
 */

.uk-search .uk-search-icon-flip {
    right: 0;
    left: auto;
}


/* Default modifier
 ========================================================================== */

.uk-search-default { width: @search-default-width; }

/*
 * Input
 */

.uk-search-default .uk-search-input {
    height: @search-default-height;
    padding-left: @search-default-padding-horizontal;
    padding-right: @search-default-padding-horizontal;
    background: @search-default-background;
    .hook-search-default-input;
}

/* Focus */
.uk-search-default .uk-search-input:focus {
    background-color: @search-default-focus-background;
    .hook-search-default-input-focus;
}

/*
 * Icon
 */

.uk-search-default .uk-search-icon { width: @search-default-icon-width; }

.uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input { padding-left: (@search-default-icon-width); }
.uk-search-default .uk-search-icon-flip + .uk-search-input { padding-right: (@search-default-icon-width); }


/* Navbar modifier
 ========================================================================== */

.uk-search-navbar { width: @search-navbar-width; }

/*
 * Input
 */

.uk-search-navbar .uk-search-input {
    height: @search-navbar-height;
    background: @search-navbar-background;
    font-size: @search-navbar-font-size;
    .hook-search-navbar-input;
}

/*
 * Icon
 */

.uk-search-navbar .uk-search-icon { width: @search-navbar-icon-width; }

.uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input { padding-left: (@search-navbar-icon-width); }
.uk-search-navbar .uk-search-icon-flip + .uk-search-input { padding-right: (@search-navbar-icon-width); }


/* Large modifier
 ========================================================================== */

.uk-search-large { width: @search-large-width; }

/*
 * Input
 */

.uk-search-large .uk-search-input {
    height: @search-large-height;
    background: @search-large-background;
    font-size: @search-large-font-size;
    .hook-search-large-input;
}

/*
 * Icon
 */

.uk-search-large .uk-search-icon { width: @search-large-icon-width; }

.uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input { padding-left: (@search-large-icon-width); }
.uk-search-large .uk-search-icon-flip + .uk-search-input { padding-right: (@search-large-icon-width); }


/* Toggle
 ========================================================================== */

.uk-search-toggle {
    color: @search-toggle-color;
    .hook-search-toggle;
}

/* Hover + Focus */
.uk-search-toggle:hover,
.uk-search-toggle:focus {
    color: @search-toggle-hover-color;
    .hook-search-toggle-hover;
}


// Hooks
// ========================================================================

.hook-search-misc;

.hook-search-input() {}
.hook-search-default-input() {}
.hook-search-default-input-focus() {}
.hook-search-navbar-input() {}
.hook-search-large-input() {}

.hook-search-toggle() {}
.hook-search-toggle-hover() {}

.hook-search-misc() {}


// Inverse
// ========================================================================

@inverse-search-color:                         @inverse-global-color;
@inverse-search-placeholder-color:             @inverse-global-muted-color;

@inverse-search-icon-color:                    @inverse-global-muted-color;

@inverse-search-default-background:            @inverse-global-muted-background;
@inverse-search-default-focus-background:      @inverse-search-default-background;

@inverse-search-navbar-background:             transparent;

@inverse-search-large-background:              transparent;

@inverse-search-toggle-color:                  @inverse-global-muted-color;
@inverse-search-toggle-hover-color:            @inverse-global-color;

.hook-inverse() {

    //
    // Input
    //

    .uk-search-input { color: @inverse-search-color; }

    .uk-search-input:-ms-input-placeholder { color: @inverse-search-placeholder-color !important; }
    .uk-search-input::placeholder { color: @inverse-search-placeholder-color; }


    //
    // Icon
    //

    .uk-search .uk-search-icon { color: @inverse-search-icon-color; }

    .uk-search .uk-search-icon:hover { color: @inverse-search-icon-color; }

    //
    // Style modifier
    //

    .uk-search-default .uk-search-input {
        background-color: @inverse-search-default-background;
        .hook-inverse-search-default-input;
    }
    .uk-search-default .uk-search-input:focus {
        background-color: @inverse-search-default-background;
        .hook-inverse-search-default-input-focus;
    }

    .uk-search-navbar .uk-search-input {
        background-color: @inverse-search-navbar-background;
        .hook-inverse-search-navbar-input;
    }

    .uk-search-large .uk-search-input {
        background-color: @inverse-search-large-background;
        .hook-inverse-search-large-input;
    }

    //
    // Toggle
    //

    .uk-search-toggle {
        color: @inverse-search-toggle-color;
        .hook-inverse-search-toggle;
    }

    .uk-search-toggle:hover,
    .uk-search-toggle:focus {
        color: @inverse-search-toggle-hover-color;
        .hook-inverse-search-toggle-hover;
    }

}

.hook-inverse-search-default-input() {}
.hook-inverse-search-default-input-focus() {}
.hook-inverse-search-navbar-input() {}
.hook-inverse-search-large-input() {}
.hook-inverse-search-toggle() {}
.hook-inverse-search-toggle-hover() {}

// Name:            Nav
// Description:     Defines styles for list navigations
//
// Component:       `uk-nav`
//
// Sub-objects:     `uk-nav-header`
//                  `uk-nav-divider`
//                  `uk-nav-sub`
//
// Modifiers:       `uk-nav-parent-icon`
//                  `uk-nav-default`
//                  `uk-nav-primary`
//                  `uk-nav-center`
//
// States:          `uk-active`
//                  `uk-parent`
//                  `uk-open`
//                  `uk-touch`
//
// ========================================================================


// Variables
// ========================================================================

@nav-item-padding-vertical:                     5px;
@nav-item-padding-horizontal:                   0;

@nav-sublist-padding-vertical:                  5px;
@nav-sublist-padding-left:                      15px;
@nav-sublist-deeper-padding-left:               15px;
@nav-sublist-item-padding-vertical:             2px;

@nav-parent-icon-width:                         (@global-line-height * 1em);
@nav-parent-icon-height:                        @nav-parent-icon-width;
@nav-parent-icon-color:                         @global-color;

@nav-header-padding-vertical:                   @nav-item-padding-vertical;
@nav-header-padding-horizontal:                 @nav-item-padding-horizontal;
@nav-header-font-size:                          @global-small-font-size;
@nav-header-text-transform:                     uppercase;
@nav-header-margin-top:                         @global-margin;

@nav-divider-margin-vertical:                   5px;
@nav-divider-margin-horizontal:                 0;

@nav-default-item-color:                        @global-muted-color;
@nav-default-item-hover-color:                  @global-color;
@nav-default-item-active-color:                 @global-emphasis-color;
@nav-default-header-color:                      @global-emphasis-color;
@nav-default-divider-border-width:              @global-border-width;
@nav-default-divider-border:                    @global-border;
@nav-default-sublist-item-color:                @global-muted-color;
@nav-default-sublist-item-hover-color:          @global-color;

@nav-primary-item-font-size:                    @global-large-font-size;
@nav-primary-item-line-height:                  @global-line-height;
@nav-primary-item-color:                        @global-muted-color;
@nav-primary-item-hover-color:                  @global-color;
@nav-primary-item-active-color:                 @global-emphasis-color;
@nav-primary-header-color:                      @global-emphasis-color;
@nav-primary-divider-border-width:              @global-border-width;
@nav-primary-divider-border:                    @global-border;
@nav-primary-sublist-item-color:                @global-muted-color;
@nav-primary-sublist-item-hover-color:          @global-color;

@internal-nav-parent-close-image:               url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwb2x5bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4xIiBwb2ludHM9IjEwIDEgNCA3IDEwIDEzIiAvPgo8L3N2Zz4=");
@internal-nav-parent-open-image:                url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwb2x5bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4xIiBwb2ludHM9IjEgNCA3IDEwIDEzIDQiIC8+Cjwvc3ZnPg==");


/* ========================================================================
   Component: Nav
 ========================================================================== */

/*
 * Reset
 * 1. Prepare lists
 * 2. Prepare links
 * 3. Remove default focus style
 */

/* 1 */
.uk-nav,
.uk-nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

/* 2 */
.uk-nav li > a {
    display: block;
    text-decoration: none;
}

/* 3 */
.uk-nav li > a:focus { outline: none; }

/*
 * Items
 * Must target `a` elements to exclude other elements (e.g. lists)
 */

.uk-nav > li > a { padding: @nav-item-padding-vertical @nav-item-padding-horizontal; }


/* Sublists
 ========================================================================== */

/*
 * Level 2
 * `ul` needed for higher specificity to override padding
 */

ul.uk-nav-sub {
    padding: @nav-sublist-padding-vertical 0 @nav-sublist-padding-vertical @nav-sublist-padding-left;
    .hook-nav-sub;
}

/*
 * Level 3 and deeper
 */

.uk-nav-sub ul { padding-left: @nav-sublist-deeper-padding-left; }

/*
 * Items
 */

.uk-nav-sub a { padding: @nav-sublist-item-padding-vertical 0; }


/* Parent icon modifier
 ========================================================================== */

.uk-nav-parent-icon > .uk-parent > a::after {
    content: "";
    width: @nav-parent-icon-width;
    height: @nav-parent-icon-height;
    float: right;
    .svg-fill(@internal-nav-parent-close-image, "#000", @nav-parent-icon-color);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    .hook-nav-parent-icon;
}

.uk-nav-parent-icon > .uk-parent.uk-open > a::after { .svg-fill(@internal-nav-parent-open-image, "#000", @nav-parent-icon-color); }


/* Header
 ========================================================================== */

.uk-nav-header {
    padding: @nav-header-padding-vertical @nav-header-padding-horizontal;
    text-transform: @nav-header-text-transform;
    font-size: @nav-header-font-size;
    .hook-nav-header;
}

.uk-nav-header:not(:first-child) { margin-top: @nav-header-margin-top; }


/* Divider
 ========================================================================== */

.uk-nav-divider {
    margin: @nav-divider-margin-vertical @nav-divider-margin-horizontal;
    .hook-nav-divider;
}


/* Default modifier
 ========================================================================== */

.uk-nav-default {
    .hook-nav-default;
}

/*
 * Items
 */

.uk-nav-default > li > a {
    color: @nav-default-item-color;
    .hook-nav-default-item;
}

/* Hover + Focus */
.uk-nav-default > li > a:hover,
.uk-nav-default > li > a:focus {
    color: @nav-default-item-hover-color;
    .hook-nav-default-item-hover;
}

/* Active */
.uk-nav-default > li.uk-active > a {
    color: @nav-default-item-active-color;
    .hook-nav-default-item-active;
}

/*
 * Header
 */

.uk-nav-default .uk-nav-header {
    color: @nav-default-header-color;
    .hook-nav-default-header;
}

/*
 * Divider
 */

.uk-nav-default .uk-nav-divider {
    border-top: @nav-default-divider-border-width solid @nav-default-divider-border;
    .hook-nav-default-divider;
}

/*
 * Sublists
 */

.uk-nav-default .uk-nav-sub a { color: @nav-default-sublist-item-color; }

.uk-nav-default .uk-nav-sub a:hover,
.uk-nav-default .uk-nav-sub a:focus { color: @nav-default-sublist-item-hover-color; }


/* Primary modifier
 ========================================================================== */

.uk-nav-primary {
    .hook-nav-primary;
}

/*
 * Items
 */

.uk-nav-primary > li > a {
    font-size: @nav-primary-item-font-size;
    line-height: @nav-primary-item-line-height;
    color: @nav-primary-item-color;
    .hook-nav-primary-item;
}

/* Hover + Focus */
.uk-nav-primary > li > a:hover,
.uk-nav-primary > li > a:focus {
    color: @nav-primary-item-hover-color;
    .hook-nav-primary-item-hover;
}

/* Active */
.uk-nav-primary > li.uk-active > a {
    color: @nav-primary-item-active-color;
    .hook-nav-primary-item-active;
}

/*
 * Header
 */

.uk-nav-primary .uk-nav-header {
    color: @nav-primary-header-color;
    .hook-nav-primary-header;
}

/*
 * Divider
 */

.uk-nav-primary .uk-nav-divider {
    border-top: @nav-primary-divider-border-width solid @nav-primary-divider-border;
    .hook-nav-primary-divider;
}

/*
 * Sublists
 */

.uk-nav-primary .uk-nav-sub a { color: @nav-primary-sublist-item-color; }

.uk-nav-primary .uk-nav-sub a:hover,
.uk-nav-primary .uk-nav-sub a:focus { color: @nav-primary-sublist-item-hover-color; }


/* Alignment modifier
 ========================================================================== */

.uk-nav-center { text-align: center; }

/* Sublists */
.uk-nav-center .uk-nav-sub,
.uk-nav-center .uk-nav-sub ul { padding-left: 0; }

/* Parent icon modifier  */
.uk-nav-center.uk-nav-parent-icon > .uk-parent > a::after { position: absolute; }


// Hooks
// ========================================================================

.hook-nav-misc;

.hook-nav-sub() {}
.hook-nav-parent-icon() {}
.hook-nav-header() {}
.hook-nav-divider() {}
.hook-nav-default() {}
.hook-nav-default-item() {}
.hook-nav-default-item-hover() {}
.hook-nav-default-item-active() {}
.hook-nav-default-header() {}
.hook-nav-default-divider() {}
.hook-nav-primary() {}
.hook-nav-primary-item() {}
.hook-nav-primary-item-hover() {}
.hook-nav-primary-item-active() {}
.hook-nav-primary-header() {}
.hook-nav-primary-divider() {}
.hook-nav-misc() {}


// Inverse
// ========================================================================

@inverse-nav-parent-icon-color:                @inverse-global-color;
@inverse-nav-default-item-color:               @inverse-global-muted-color;
@inverse-nav-default-item-hover-color:         @inverse-global-color;
@inverse-nav-default-item-active-color:        @inverse-global-emphasis-color;
@inverse-nav-default-header-color:             @inverse-global-emphasis-color;
@inverse-nav-default-divider-border:           @inverse-global-border;
@inverse-nav-default-sublist-item-color:       @inverse-global-muted-color;
@inverse-nav-default-sublist-item-hover-color: @inverse-global-color;

@inverse-nav-primary-item-color:               @inverse-global-muted-color;
@inverse-nav-primary-item-hover-color:         @inverse-global-color;
@inverse-nav-primary-item-active-color:        @inverse-global-emphasis-color;
@inverse-nav-primary-header-color:             @inverse-global-emphasis-color;
@inverse-nav-primary-divider-border:           @inverse-global-border;
@inverse-nav-primary-sublist-item-color:       @inverse-global-muted-color;
@inverse-nav-primary-sublist-item-hover-color: @inverse-global-color;

.hook-inverse() {

    //
    // Parent icon modifier
    //

    .uk-nav-parent-icon > .uk-parent > a::after {
        .svg-fill(@internal-nav-parent-close-image, "#000", @inverse-nav-parent-icon-color);
        .hook-inverse-nav-parent-icon;
    }

    .uk-nav-parent-icon > .uk-parent.uk-open > a::after { .svg-fill(@internal-nav-parent-open-image, "#000", @inverse-nav-parent-icon-color); }

    //
    // Default
    //

    .uk-nav-default > li > a {
        color: @inverse-nav-default-item-color;
        .hook-inverse-nav-default-item;
    }

    .uk-nav-default > li > a:hover,
    .uk-nav-default > li > a:focus {
        color: @inverse-nav-default-item-hover-color;
        .hook-inverse-nav-default-item-hover;
    }

    .uk-nav-default > li.uk-active > a {
        color: @inverse-nav-default-item-active-color;
        .hook-inverse-nav-default-item-active;
    }

    .uk-nav-default .uk-nav-header {
        color: @inverse-nav-default-header-color;
        .hook-inverse-nav-default-header;
    }

    .uk-nav-default .uk-nav-divider {
        border-top-color: @inverse-nav-default-divider-border;
        .hook-inverse-nav-default-divider;
    }

    .uk-nav-default .uk-nav-sub a { color: @inverse-nav-default-sublist-item-color; }

    .uk-nav-default .uk-nav-sub a:hover,
    .uk-nav-default .uk-nav-sub a:focus { color: @inverse-nav-default-sublist-item-hover-color; }

    //
    // Primary
    //

    .uk-nav-primary > li > a {
        color: @inverse-nav-primary-item-color;
        .hook-inverse-nav-primary-item;
    }

    .uk-nav-primary > li > a:hover,
    .uk-nav-primary > li > a:focus {
        color: @inverse-nav-primary-item-hover-color;
        .hook-inverse-nav-primary-item-hover;
    }

    .uk-nav-primary > li.uk-active > a {
        color: @inverse-nav-primary-item-active-color;
        .hook-inverse-nav-primary-item-active;
    }

    .uk-nav-primary .uk-nav-header {
        color: @inverse-nav-primary-header-color;
        .hook-inverse-nav-primary-header;
    }

    .uk-nav-primary .uk-nav-divider {
        border-top-color: @inverse-nav-primary-divider-border;
        .hook-inverse-nav-primary-divider;
    }

    .uk-nav-primary .uk-nav-sub a { color: @inverse-nav-primary-sublist-item-color; }

    .uk-nav-primary .uk-nav-sub a:hover,
    .uk-nav-primary .uk-nav-sub a:focus { color: @inverse-nav-primary-sublist-item-hover-color; }

}

.hook-inverse-nav-parent-icon() {}
.hook-inverse-nav-default-item() {}
.hook-inverse-nav-default-item-hover() {}
.hook-inverse-nav-default-item-active() {}
.hook-inverse-nav-default-header() {}
.hook-inverse-nav-default-divider() {}
.hook-inverse-nav-primary-item() {}
.hook-inverse-nav-primary-item-hover() {}
.hook-inverse-nav-primary-item-active() {}
.hook-inverse-nav-primary-header() {}
.hook-inverse-nav-primary-divider() {}

// Name:            Navbar
// Description:     Component to create horizontal navigation bars
//
// Component:       `uk-navbar`
//
// Sub-objects:     `uk-navbar-container`
//                  `uk-navbar-left`
//                  `uk-navbar-right`
//                  `uk-navbar-center`
//                  `uk-navbar-center-left`
//                  `uk-navbar-center-right`
//                  `uk-navbar-nav`
//                  `uk-navbar-item`
//                  `uk-navbar-toggle`
//                  `uk-navbar-subtitle`
//                  `uk-navbar-dropbar`
//
// Adopted:         `uk-navbar-dropdown` + Modifiers
//                  `uk-navbar-dropdown-nav`
//                  `uk-navbar-dropdown-grid`
//                  `uk-navbar-toggle-icon`
//
// Modifiers:       `uk-navbar-transparent`
//                  `uk-navbar-sticky`
//                  `uk-navbar-dropdown-stack`
//
// States:          `uk-active`
//                  `uk-parent`
//                  `uk-open`
//
//
// ========================================================================


// Variables
// ========================================================================

@navbar-background:                             @global-muted-background;
@navbar-color-mode:                             none;

@navbar-nav-item-height:                        80px;
@navbar-nav-item-padding-horizontal:            15px;
@navbar-nav-item-color:                         @global-muted-color;
@navbar-nav-item-font-size:                     @global-font-size;
@navbar-nav-item-font-family:                   @global-font-family;
@navbar-nav-item-hover-color:                   @global-color;
@navbar-nav-item-onclick-color:                 @global-emphasis-color;
@navbar-nav-item-active-color:                  @global-emphasis-color;

@navbar-item-color:                             @global-color;

@navbar-toggle-color:                           @global-muted-color;
@navbar-toggle-hover-color:                     @global-color;

@navbar-subtitle-font-size:                     @global-small-font-size;

@navbar-dropdown-z-index:                       @global-z-index + 20;
@navbar-dropdown-width:                         200px;
@navbar-dropdown-margin:                        0;
@navbar-dropdown-padding:                       15px;
@navbar-dropdown-background:                    @global-muted-background;
@navbar-dropdown-color:                         @global-color;
@navbar-dropdown-grid-gutter-horizontal:        @global-gutter;
@navbar-dropdown-grid-gutter-vertical:          @navbar-dropdown-grid-gutter-horizontal;

@navbar-dropdown-dropbar-margin-top:            0;
@navbar-dropdown-dropbar-margin-bottom:         @navbar-dropdown-dropbar-margin-top;

@navbar-dropdown-nav-item-color:                @global-muted-color;
@navbar-dropdown-nav-item-hover-color:          @global-color;
@navbar-dropdown-nav-item-active-color:         @global-emphasis-color;
@navbar-dropdown-nav-header-color:              @global-emphasis-color;
@navbar-dropdown-nav-divider-border-width:      @global-border-width;
@navbar-dropdown-nav-divider-border:            @global-border;
@navbar-dropdown-nav-sublist-item-color:        @global-muted-color;
@navbar-dropdown-nav-sublist-item-hover-color:  @global-color;

@navbar-dropbar-background:                     @navbar-dropdown-background;
@navbar-dropbar-z-index:                        @global-z-index + 20;


/* ========================================================================
   Component: Navbar
 ========================================================================== */

/*
 * 1. Create position context to center navbar group
 */

.uk-navbar {
    display: flex;
    /* 1 */
    position: relative;
    .hook-navbar;
}


/* Container
 ========================================================================== */

.uk-navbar-container:not(.uk-navbar-transparent) {
    background: @navbar-background;
    .hook-navbar-container;
}

// Color Mode
.uk-navbar-container:not(.uk-navbar-transparent):extend(.uk-light all) when (@navbar-color-mode = light) {}
.uk-navbar-container:not(.uk-navbar-transparent):extend(.uk-dark all) when (@navbar-color-mode = dark) {}


/*
 * Remove pseudo elements created by micro clearfix as precaution (if Container component is used)
 */

.uk-navbar-container > ::before,
.uk-navbar-container > ::after { display: none !important; }


/* Groups
 ========================================================================== */

/*
 * 1. Align navs and items vertically if they have a different height
 * 2. Note: IE 11 requires an extra `div` which affects the center selector
 */

.uk-navbar-left,
.uk-navbar-right,
// 2. [class*='uk-navbar-center'],
.uk-navbar-center,
.uk-navbar-center-left > *,
.uk-navbar-center-right > * {
    display: flex;
    /* 1 */
    align-items: center;
}

/*
 * Horizontal alignment
 * 1. Create position context for centered navbar with sub groups (left/right)
 * 2. Needed for dropdowns because a new position context is created
 *    `z-index` must be smaller than off-canvas
 * 3. Fix text wrapping if the centered section is larger than 50% of the navbar
 * 4. Align sub groups for centered navbar
 */

.uk-navbar-right { margin-left: auto; }

.uk-navbar-center:only-child {
    margin-left: auto;
    margin-right: auto;
    /* 1 */
    position: relative;
}

.uk-navbar-center:not(:only-child) {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    /* 2 */
    z-index: @global-z-index - 10;
}

/* 3 */
.uk-navbar-center:not(:only-child) .uk-navbar-nav > li > a,
.uk-navbar-center:not(:only-child) .uk-navbar-item,
.uk-navbar-center:not(:only-child) .uk-navbar-toggle { white-space: nowrap; }

/* 4 */
.uk-navbar-center-left,
.uk-navbar-center-right {
   position: absolute;
   top: 0;
}

.uk-navbar-center-left { right: 100%; }
.uk-navbar-center-right { left: 100%; }

[class*='uk-navbar-center-'] .uk-navbar-nav > li > a,
[class*='uk-navbar-center-'] .uk-navbar-item,
[class*='uk-navbar-center-'] .uk-navbar-toggle { white-space: nowrap; }


/* Nav
 ========================================================================== */

/*
 * 1. Reset list
 */

.uk-navbar-nav {
    display: flex;
    /* 1 */
    margin: 0;
    padding: 0;
    list-style: none;
}

/*
 * Allow items to wrap into the next line
 * Only not `absolute` positioned groups
 */

.uk-navbar-left,
.uk-navbar-right,
.uk-navbar-center:only-child { flex-wrap: wrap; }

/*
 * Items
 * 1. Center content vertically and horizontally
 * 2. Dimensions
 * 3. Style
 * 4. Required for `a`
 */

.uk-navbar-nav > li > a,    // Nav item
.uk-navbar-item,            // Content item
.uk-navbar-toggle {         // Clickable item
    /* 1 */
    display: flex;
    justify-content: center;
    align-items: center;
    /* 2 */
    box-sizing: border-box;
    height: @navbar-nav-item-height;
    padding: 0 @navbar-nav-item-padding-horizontal;
    /* 3 */
    font-size: @navbar-nav-item-font-size;
    font-family: @navbar-nav-item-font-family;
    /* 4 */
    text-decoration: none;
}

/*
 * Nav items
 */

.uk-navbar-nav > li > a {
    color: @navbar-nav-item-color;
    .hook-navbar-nav-item;
}

/*
 * Hover
 * Apply hover style also to focus state and if dropdown is opened
 */

.uk-navbar-nav > li:hover > a,
.uk-navbar-nav > li > a:focus,
.uk-navbar-nav > li > a.uk-open {
    color: @navbar-nav-item-hover-color;
    outline: none;
    .hook-navbar-nav-item-hover;
}

/* OnClick */
.uk-navbar-nav > li > a:active {
    color: @navbar-nav-item-onclick-color;
    .hook-navbar-nav-item-onclick;
}

/* Active */
.uk-navbar-nav > li.uk-active > a {
    color: @navbar-nav-item-active-color;
    .hook-navbar-nav-item-active;
}


/* Item
 ========================================================================== */

.uk-navbar-item {
    color: @navbar-item-color;
    .hook-navbar-item;
}


/* Toggle
 ========================================================================== */

.uk-navbar-toggle {
    color: @navbar-toggle-color;
    .hook-navbar-toggle;
}

.uk-navbar-toggle:hover,
.uk-navbar-toggle:focus,
.uk-navbar-toggle.uk-open {
    color: @navbar-toggle-hover-color;
    outline: none;
    text-decoration: none;
    .hook-navbar-toggle-hover;
}

/*
 * Icon
 * Adopts `uk-icon`
 */

.uk-navbar-toggle-icon {
    .hook-navbar-toggle-icon;
}

/* Hover + Focus */
:hover > .uk-navbar-toggle-icon,
:focus > .uk-navbar-toggle-icon {
    .hook-navbar-toggle-icon-hover;
}


/* Subtitle
 ========================================================================== */

.uk-navbar-subtitle {
    font-size: @navbar-subtitle-font-size;
    .hook-navbar-subtitle;
}


/* Style modifiers
 ========================================================================== */

.uk-navbar-transparent {
    .hook-navbar-transparent;
}

.uk-navbar-sticky {
    .hook-navbar-sticky;
}


/* Dropdown
 ========================================================================== */

/*
 * Adopts `uk-dropdown`
 * 1. Hide by default
 * 2. Set position
 * 3. Set a default width
 * 4. Style
 */

.uk-navbar-dropdown {
    /* 1 */
    display: none;
    /* 2 */
    position: absolute;
    z-index: @navbar-dropdown-z-index;
    /* 3 */
    box-sizing: border-box;
    width: @navbar-dropdown-width;
    /* 4 */
    padding: @navbar-dropdown-padding;
    background: @navbar-dropdown-background;
    color: @navbar-dropdown-color;
    .hook-navbar-dropdown;
}

/* Show */
.uk-navbar-dropdown.uk-open { display: block; }

/*
 * Direction / Alignment modifiers
 */

/* Direction */
[class*='uk-navbar-dropdown-top'] { margin-top: -@navbar-dropdown-margin; }
[class*='uk-navbar-dropdown-bottom'] { margin-top: @navbar-dropdown-margin; }
[class*='uk-navbar-dropdown-left'] { margin-left: -@navbar-dropdown-margin; }
[class*='uk-navbar-dropdown-right'] { margin-left: @navbar-dropdown-margin; }

/*
 * Grid
 * Adopts `uk-grid`
 */

/* Gutter Horizontal */
.uk-navbar-dropdown-grid { margin-left: -@navbar-dropdown-grid-gutter-horizontal; }
.uk-navbar-dropdown-grid > * { padding-left: @navbar-dropdown-grid-gutter-horizontal; }

/* Gutter Vertical */
.uk-navbar-dropdown-grid > .uk-grid-margin { margin-top: @navbar-dropdown-grid-gutter-vertical; }

/* Stack */
.uk-navbar-dropdown-stack .uk-navbar-dropdown-grid > * { width: 100% !important; }

/*
 * Width modifier
 */

.uk-navbar-dropdown-width-2:not(.uk-navbar-dropdown-stack) { width: (@navbar-dropdown-width * 2); }
.uk-navbar-dropdown-width-3:not(.uk-navbar-dropdown-stack) { width: (@navbar-dropdown-width * 3); }
.uk-navbar-dropdown-width-4:not(.uk-navbar-dropdown-stack) { width: (@navbar-dropdown-width * 4); }
.uk-navbar-dropdown-width-5:not(.uk-navbar-dropdown-stack) { width: (@navbar-dropdown-width * 5); }

/*
 * Dropbar modifier
 */

.uk-navbar-dropdown-dropbar {
    top: 0 !important;
    margin-top: @navbar-dropdown-dropbar-margin-top;
    margin-bottom: @navbar-dropdown-dropbar-margin-bottom;
    .hook-navbar-dropdown-dropbar;
}


/* Dropdown Nav
 * Adopts `uk-nav`
 ========================================================================== */

.uk-navbar-dropdown-nav {
    .hook-navbar-dropdown-nav;
}

/*
 * Items
 */

.uk-navbar-dropdown-nav > li > a {
    color: @navbar-dropdown-nav-item-color;
    .hook-navbar-dropdown-nav-item;
}

/* Hover + Focus */
.uk-navbar-dropdown-nav > li > a:hover,
.uk-navbar-dropdown-nav > li > a:focus {
    color: @navbar-dropdown-nav-item-hover-color;
    .hook-navbar-dropdown-nav-item-hover;
}

/* Active */
.uk-navbar-dropdown-nav > li.uk-active > a {
    color: @navbar-dropdown-nav-item-active-color;
    .hook-navbar-dropdown-nav-item-active;
}

/*
 * Header
 */

.uk-navbar-dropdown-nav .uk-nav-header {
    color: @navbar-dropdown-nav-header-color;
    .hook-navbar-dropdown-nav-header;
}

/*
 * Divider
 */

.uk-navbar-dropdown-nav .uk-nav-divider {
    border-top: @navbar-dropdown-nav-divider-border-width solid @navbar-dropdown-nav-divider-border;
    .hook-navbar-dropdown-nav-divider;
}

/*
 * Sublists
 */

.uk-navbar-dropdown-nav .uk-nav-sub a { color: @navbar-dropdown-nav-sublist-item-color; }

.uk-navbar-dropdown-nav .uk-nav-sub a:hover,
.uk-navbar-dropdown-nav .uk-nav-sub a:focus { color: @navbar-dropdown-nav-sublist-item-hover-color; }


/* Dropbar
 ========================================================================== */

.uk-navbar-dropbar {
    position: relative;
    background: @navbar-dropbar-background;
    overflow: hidden;
    .hook-navbar-dropbar;
}

/*
 * Slide modifier
 */

.uk-navbar-dropbar-slide {
    position: absolute;
    z-index: @navbar-dropbar-z-index;
    left: 0;
    right: 0;
    .hook-navbar-dropbar-slide;
}


// Hooks
// ========================================================================

.hook-navbar-misc;

.hook-navbar() {}
.hook-navbar-container() {}
.hook-navbar-nav-item() {}
.hook-navbar-nav-item-hover() {}
.hook-navbar-nav-item-onclick() {}
.hook-navbar-nav-item-active() {}
.hook-navbar-item() {}
.hook-navbar-toggle(){}
.hook-navbar-toggle-hover(){}
.hook-navbar-toggle-icon(){}
.hook-navbar-toggle-icon-hover(){}
.hook-navbar-subtitle() {}
.hook-navbar-transparent(){}
.hook-navbar-sticky(){}
.hook-navbar-dropdown(){}
.hook-navbar-dropdown-dropbar(){}
.hook-navbar-dropdown-nav(){}
.hook-navbar-dropdown-nav-item() {}
.hook-navbar-dropdown-nav-item-hover() {}
.hook-navbar-dropdown-nav-item-active() {}
.hook-navbar-dropdown-nav-header() {}
.hook-navbar-dropdown-nav-divider() {}
.hook-navbar-dropbar(){}
.hook-navbar-dropbar-slide(){}
.hook-navbar-misc() {}


// Inverse
// ========================================================================

@inverse-navbar-nav-item-color:                @inverse-global-muted-color;
@inverse-navbar-nav-item-hover-color:          @inverse-global-color;
@inverse-navbar-nav-item-onclick-color:        @inverse-global-emphasis-color;
@inverse-navbar-nav-item-active-color:         @inverse-global-emphasis-color;
@inverse-navbar-item-color:                    @inverse-global-color;
@inverse-navbar-toggle-color:                  @inverse-global-muted-color;
@inverse-navbar-toggle-hover-color:            @inverse-global-color;

.hook-inverse() {

    .uk-navbar-nav > li > a {
        color: @inverse-navbar-nav-item-color;
        .hook-inverse-navbar-nav-item;
    }

    .uk-navbar-nav > li:hover > a,
    .uk-navbar-nav > li > a:focus,
    .uk-navbar-nav > li > a.uk-open {
        color: @inverse-navbar-nav-item-hover-color;
        .hook-inverse-navbar-nav-item-hover;
    }

    .uk-navbar-nav > li > a:active {
        color: @inverse-navbar-nav-item-onclick-color;
        .hook-inverse-navbar-nav-item-onclick;
    }

    .uk-navbar-nav > li.uk-active > a {
        color: @inverse-navbar-nav-item-active-color;
        .hook-inverse-navbar-nav-item-active;
    }

    .uk-navbar-item {
        color: @inverse-navbar-item-color;
        .hook-inverse-navbar-item;
    }

    .uk-navbar-toggle {
        color: @inverse-navbar-toggle-color;
        .hook-inverse-navbar-toggle;
    }

    .uk-navbar-toggle:hover,
    .uk-navbar-toggle:focus,
    .uk-navbar-toggle.uk-open {
        color: @inverse-navbar-toggle-hover-color;
        .hook-inverse-navbar-toggle-hover;
    }

}

.hook-inverse-navbar-nav-item() {}
.hook-inverse-navbar-nav-item-hover() {}
.hook-inverse-navbar-nav-item-onclick() {}
.hook-inverse-navbar-nav-item-active() {}
.hook-inverse-navbar-item() {}
.hook-inverse-navbar-toggle() {}
.hook-inverse-navbar-toggle-hover() {}

// Name:            Subnav
// Description:     Component to create a sub navigation
//
// Component:       `uk-subnav`
//
// Modifiers:       `uk-subnav-divider`
//                  `uk-subnav-pill`
//
// States:          `uk-active`
//                  `uk-first-column`
//
// ========================================================================


// Variables
// ========================================================================

@subnav-margin-horizontal:                      20px;

@subnav-item-color:                             @global-muted-color;
@subnav-item-hover-color:                       @global-color;
@subnav-item-hover-text-decoration:             none;
@subnav-item-active-color:                      @global-emphasis-color;

@subnav-divider-margin-horizontal:              @subnav-margin-horizontal;
@subnav-divider-border-height:                  1.5em;
@subnav-divider-border-width:                   @global-border-width;
@subnav-divider-border:                         @global-border;

@subnav-pill-item-padding-vertical:             5px;
@subnav-pill-item-padding-horizontal:           10px;
@subnav-pill-item-background:                   transparent;
@subnav-pill-item-color:                        @subnav-item-color;
@subnav-pill-item-hover-background:             @global-muted-background;
@subnav-pill-item-hover-color:                  @global-color;
@subnav-pill-item-onclick-background:           @subnav-pill-item-hover-background;
@subnav-pill-item-onclick-color:                @subnav-pill-item-hover-color;
@subnav-pill-item-active-background:            @global-primary-background;
@subnav-pill-item-active-color:                 @global-inverse-color;

@subnav-item-disabled-color:                    @global-muted-color;


/* ========================================================================
   Component: Subnav
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Gutter
 * 3. Reset list
 */

.uk-subnav {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin-left: -@subnav-margin-horizontal;
    /* 3 */
    padding: 0;
    list-style: none;
    .hook-subnav;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 * 3. Create position context for dropdowns
 */

.uk-subnav > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @subnav-margin-horizontal;
    /* 3 */
    position: relative;
}


/* Items
 ========================================================================== */

/*
 * Items must target `a` elements to exclude other elements (e.g. dropdowns)
 * Using `:first-child` instead of `a` to support `span` elements for text
 * 1. Prevent gap if child element is `inline-block`, e.g. an icon
 * 2. Style
 */

.uk-subnav > * > :first-child {
    /* 1 */
    display: block;
    /* 2 */
    color: @subnav-item-color;
    .hook-subnav-item;
}

/* Hover + Focus */
.uk-subnav > * > a:hover,
.uk-subnav > * > a:focus {
    color: @subnav-item-hover-color;
    text-decoration: @subnav-item-hover-text-decoration;
    outline: none;
    .hook-subnav-item-hover;
}

/* Active */
.uk-subnav > .uk-active > a {
    color: @subnav-item-active-color;
    .hook-subnav-item-active;
}


/* Divider modifier
 ========================================================================== */

/*
 * 1. Align items and divider vertically
 */

.uk-subnav-divider > * {
    /* 1 */
    display: flex;
    align-items: center;
}

/*
 * Divider
 * `nth-child` makes it also work without JS if it's only one row
 */

.uk-subnav-divider > :nth-child(n+2):not(.uk-first-column)::before {
    content: "";
    height: @subnav-divider-border-height;
    margin-left: (@subnav-divider-margin-horizontal - @subnav-margin-horizontal);
    margin-right: @subnav-divider-margin-horizontal;
    border-left: @subnav-divider-border-width solid @subnav-divider-border;
    .hook-subnav-divider;
}


/* Pill modifier
 ========================================================================== */

.uk-subnav-pill > * > :first-child {
    padding: @subnav-pill-item-padding-vertical @subnav-pill-item-padding-horizontal;
    background: @subnav-pill-item-background;
    color: @subnav-pill-item-color;
    .hook-subnav-pill-item;
}

/* Hover + Focus */
.uk-subnav-pill > * > a:hover,
.uk-subnav-pill > * > a:focus {
    background-color: @subnav-pill-item-hover-background;
    color: @subnav-pill-item-hover-color;
    .hook-subnav-pill-item-hover;
}

/* OnClick */
.uk-subnav-pill > * > a:active {
    background-color: @subnav-pill-item-onclick-background;
    color: @subnav-pill-item-onclick-color;
    .hook-subnav-pill-item-onclick;
}

/* Active */
.uk-subnav-pill > .uk-active > a {
    background-color: @subnav-pill-item-active-background;
    color: @subnav-pill-item-active-color;
    .hook-subnav-pill-item-active;
}


/* Disabled
 * The same for all style modifiers
 ========================================================================== */

.uk-subnav > .uk-disabled > a {
    color: @subnav-item-disabled-color;
    .hook-subnav-item-disabled;
}


// Hooks
// ========================================================================

.hook-subnav-misc;

.hook-subnav() {}
.hook-subnav-item() {}
.hook-subnav-item-hover() {}
.hook-subnav-item-active() {}
.hook-subnav-divider() {}
.hook-subnav-pill-item() {}
.hook-subnav-pill-item-hover() {}
.hook-subnav-pill-item-onclick() {}
.hook-subnav-pill-item-active() {}
.hook-subnav-item-disabled() {}
.hook-subnav-misc() {}


// Inverse
// ========================================================================

@inverse-subnav-item-color:                    @inverse-global-muted-color;
@inverse-subnav-item-hover-color:              @inverse-global-color;
@inverse-subnav-item-active-color:             @inverse-global-emphasis-color;
@inverse-subnav-divider-border:                @inverse-global-border;
@inverse-subnav-pill-item-background:          transparent;
@inverse-subnav-pill-item-color:               @inverse-global-muted-color;
@inverse-subnav-pill-item-hover-background:    @inverse-global-muted-background;
@inverse-subnav-pill-item-hover-color:         @inverse-global-color;
@inverse-subnav-pill-item-onclick-background:  @inverse-subnav-pill-item-hover-background;
@inverse-subnav-pill-item-onclick-color:       @inverse-subnav-pill-item-hover-color;
@inverse-subnav-pill-item-active-background:   @inverse-global-primary-background;
@inverse-subnav-pill-item-active-color:        @inverse-global-inverse-color;
@inverse-subnav-item-disabled-color:           @inverse-global-muted-color;

.hook-inverse() {

    .uk-subnav > * > :first-child {
        color: @inverse-subnav-item-color;
        .hook-inverse-subnav-item;
    }

    .uk-subnav > * > a:hover,
    .uk-subnav > * > a:focus {
        color: @inverse-subnav-item-hover-color;
        .hook-inverse-subnav-item-hover;
    }

    .uk-subnav > .uk-active > a {
        color: @inverse-subnav-item-active-color;
        .hook-inverse-subnav-item-active;
    }

    //
    // Divider
    //

    .uk-subnav-divider > :nth-child(n+2):not(.uk-first-column)::before {
        border-left-color: @inverse-subnav-divider-border;
        .hook-inverse-subnav-divider;
    }

    //
    // Pill
    //

    .uk-subnav-pill > * > :first-child {
        background-color: @inverse-subnav-pill-item-background;
        color: @inverse-subnav-pill-item-color;
        .hook-inverse-subnav-pill-item;
    }

    .uk-subnav-pill > * > a:hover,
    .uk-subnav-pill > * > a:focus {
        background-color: @inverse-subnav-pill-item-hover-background;
        color: @inverse-subnav-pill-item-hover-color;
        .hook-inverse-subnav-pill-item-hover;
    }

    .uk-subnav-pill > * > a:active {
        background-color: @inverse-subnav-pill-item-onclick-background;
        color: @inverse-subnav-pill-item-onclick-color;
        .hook-inverse-subnav-pill-item-onclick;
    }

    .uk-subnav-pill > .uk-active > a {
        background-color: @inverse-subnav-pill-item-active-background;
        color: @inverse-subnav-pill-item-active-color;
        .hook-inverse-subnav-pill-item-active;
    }

    //
    // Disabled
    //

    .uk-subnav > .uk-disabled > a {
        color: @inverse-subnav-item-disabled-color;
        .hook-inverse-subnav-item-disabled;
    }

}

.hook-inverse-subnav-item() {}
.hook-inverse-subnav-item-hover() {}
.hook-inverse-subnav-item-active() {}
.hook-inverse-subnav-divider() {}
.hook-inverse-subnav-pill-item() {}
.hook-inverse-subnav-pill-item-hover() {}
.hook-inverse-subnav-pill-item-onclick() {}
.hook-inverse-subnav-pill-item-active() {}
.hook-inverse-subnav-item-disabled() {}

// Name:            Breadcrumb
// Description:     Component to create a breadcrumb navigation
//
// Component:       `uk-breadcrumb`
//
// States:          `uk-disabled`
//
// ========================================================================


// Variables
// ========================================================================

@breadcrumb-item-font-size:                         @global-small-font-size;
@breadcrumb-item-color:                             @global-muted-color;
@breadcrumb-item-hover-color:                       @global-color;
@breadcrumb-item-hover-text-decoration:             none;
@breadcrumb-item-active-color:                      @global-color;

@breadcrumb-divider:                                "/";
@breadcrumb-divider-margin-horizontal:              20px;
@breadcrumb-divider-color:                          @global-muted-color;


/* ========================================================================
   Component: Breadcrumb
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Reset list
 */

.uk-breadcrumb {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    padding: 0;
    list-style: none;
    .hook-breadcrumb;
}

/*
 * Space is allocated solely based on content dimensions: 0 0 auto
 */

.uk-breadcrumb > * { flex: none; }


/* Items
 ========================================================================== */

.uk-breadcrumb > * > * {
    display: inline-block;
    font-size: @breadcrumb-item-font-size;
    color: @breadcrumb-item-color;
    .hook-breadcrumb-item;
}

/* Hover + Focus */
.uk-breadcrumb > * > :hover,
.uk-breadcrumb > * > :focus {
    color: @breadcrumb-item-hover-color;
    text-decoration: @breadcrumb-item-hover-text-decoration;
    .hook-breadcrumb-item-hover;
}

/* Disabled */
.uk-breadcrumb > .uk-disabled > * {
    .hook-breadcrumb-item-disabled;
}

/* Active */
.uk-breadcrumb > :last-child > * {
    color: @breadcrumb-item-active-color;
    .hook-breadcrumb-item-active;
}

/*
 * Divider
 * `nth-child` makes it also work without JS if it's only one row
 */

.uk-breadcrumb > :nth-child(n+2):not(.uk-first-column)::before {
    content: @breadcrumb-divider;
    display: inline-block;
    margin: 0 @breadcrumb-divider-margin-horizontal;
    color: @breadcrumb-divider-color;
    .hook-breadcrumb-divider;
}


// Hooks
// ========================================================================

.hook-breadcrumb-misc;

.hook-breadcrumb() {}
.hook-breadcrumb-item() {}
.hook-breadcrumb-item-hover() {}
.hook-breadcrumb-item-disabled() {}
.hook-breadcrumb-item-active() {}
.hook-breadcrumb-divider() {}
.hook-breadcrumb-misc() {}


// Inverse
// ========================================================================

@inverse-breadcrumb-item-color:                @inverse-global-muted-color;
@inverse-breadcrumb-item-hover-color:          @inverse-global-color;
@inverse-breadcrumb-item-active-color:         @inverse-global-color;
@inverse-breadcrumb-divider-color:             @inverse-global-muted-color;

.hook-inverse() {

    .uk-breadcrumb > * > * {
        color: @inverse-breadcrumb-item-color;
        .hook-inverse-breadcrumb-item;
    }

    .uk-breadcrumb > * > :hover,
    .uk-breadcrumb > * > :focus {
        color: @inverse-breadcrumb-item-hover-color;
        .hook-inverse-breadcrumb-item-hover;
    }


    .uk-breadcrumb > .uk-disabled > * {
        .hook-inverse-breadcrumb-item-disabled;
    }

    .uk-breadcrumb > :last-child > * {
        color: @inverse-breadcrumb-item-active-color;
        .hook-inverse-breadcrumb-item-active;
    }

    //
    // Divider
    //

    .uk-breadcrumb > :nth-child(n+2):not(.uk-first-column)::before {
        color: @inverse-breadcrumb-divider-color;
        .hook-inverse-breadcrumb-divider;
    }

}

.hook-inverse-breadcrumb-item() {}
.hook-inverse-breadcrumb-item-hover() {}
.hook-inverse-breadcrumb-item-disabled() {}
.hook-inverse-breadcrumb-item-active() {}
.hook-inverse-breadcrumb-divider() {}

// Name:            Pagination
// Description:     Component to create a page navigation
//
// Component:       `uk-pagination`
//
// Adopted:         `uk-pagination-next`
//                  `uk-pagination-previous`
//
// States:          `uk-active`
//                  `uk-disabled`
//
// ========================================================================


// Variables
// ========================================================================

@pagination-margin-horizontal:                  20px;

@pagination-item-color:                         @global-muted-color;
@pagination-item-hover-color:                   @global-color;
@pagination-item-hover-text-decoration:         none;
@pagination-item-active-color:                  @global-color;
@pagination-item-disabled-color:                @global-muted-color;


/* ========================================================================
   Component: Pagination
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Gutter
 * 3. Reset list
 */

.uk-pagination {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin-left: -@pagination-margin-horizontal;
    /* 3 */
    padding: 0;
    list-style: none;
    .hook-pagination;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 * 3. Create position context for dropdowns
 */

.uk-pagination > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @pagination-margin-horizontal;
    /* 3 */
    position: relative;
}


/* Items
 ========================================================================== */

/*
 * 1. Prevent gap if child element is `inline-block`, e.g. an icon
 * 2. Style
 */

.uk-pagination > * > * {
    /* 1 */
    display: block;
    /* 2 */
    color: @pagination-item-color;
    .hook-pagination-item;
}

/* Hover + Focus */
.uk-pagination > * > :hover,
.uk-pagination > * > :focus {
    color: @pagination-item-hover-color;
    text-decoration: @pagination-item-hover-text-decoration;
    .hook-pagination-item-hover;
}

/* Active */
.uk-pagination > .uk-active > * {
    color: @pagination-item-active-color;
    .hook-pagination-item-active;
}

/* Disabled */
.uk-pagination > .uk-disabled > * {
    color: @pagination-item-disabled-color;
    .hook-pagination-item-disabled;
}


// Hooks
// ========================================================================

.hook-pagination-misc;

.hook-pagination() {}
.hook-pagination-item() {}
.hook-pagination-item-hover() {}
.hook-pagination-item-active() {}
.hook-pagination-item-disabled() {}
.hook-pagination-misc() {}


// Inverse
// ========================================================================

@inverse-pagination-item-color:                @inverse-global-muted-color;
@inverse-pagination-item-hover-color:          @inverse-global-color;
@inverse-pagination-item-active-color:         @inverse-global-color;
@inverse-pagination-item-disabled-color:       @inverse-global-muted-color;

.hook-inverse() {

    .uk-pagination > * > * {
        color: @inverse-pagination-item-color;
        .hook-inverse-pagination-item;
    }

    .uk-pagination > * > :hover,
    .uk-pagination > * > :focus {
        color: @inverse-pagination-item-hover-color;
        .hook-inverse-pagination-item-hover;
    }

    .uk-pagination > .uk-active > * {
        color: @inverse-pagination-item-active-color;
        .hook-inverse-pagination-item-active;
    }

    .uk-pagination > .uk-disabled > * {
        color: @inverse-pagination-item-disabled-color;
        .hook-inverse-pagination-item-disabled;
    }

}

.hook-inverse-pagination-item() {}
.hook-inverse-pagination-item-hover() {}
.hook-inverse-pagination-item-active() {}
.hook-inverse-pagination-item-disabled() {}

// Name:            Tab
// Description:     Component to create a tabbed navigation
//
// Component:       `uk-tab`
//
// Modifiers:       `uk-tab-bottom`
//                  `uk-tab-left`
//                  `uk-tab-right`
//
// States:          `uk-active`
//                  `uk-disabled`
//
// ========================================================================


// Variables
// ========================================================================

@tab-margin-horizontal:                  20px;

@tab-item-padding-horizontal:            10px;
@tab-item-padding-vertical:              5px;
@tab-item-color:                         @global-muted-color;
@tab-item-hover-color:                   @global-color;
@tab-item-hover-text-decoration:         none;
@tab-item-active-color:                  @global-emphasis-color;
@tab-item-disabled-color:                @global-muted-color;


/* ========================================================================
   Component: Tab
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Gutter
 * 3. Reset list
 */

.uk-tab {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin-left: -@tab-margin-horizontal;
    /* 3 */
    padding: 0;
    list-style: none;
    .hook-tab;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 * 3. Create position context for dropdowns
 */

.uk-tab > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @tab-margin-horizontal;
    /* 3 */
    position: relative;
}


/* Items
 ========================================================================== */

/*
 * Items must target `a` elements to exclude other elements (e.g. dropdowns)
 * 1. Center text if a width is set
 * 2. Style
 */

.uk-tab > * > a {
    /* 1 */
    display: block;
    text-align: center;
    /* 2 */
    padding: @tab-item-padding-vertical @tab-item-padding-horizontal;
    color: @tab-item-color;
    .hook-tab-item;
}

/* Hover + Focus */
.uk-tab > * > a:hover,
.uk-tab > * > a:focus {
    color: @tab-item-hover-color;
    text-decoration: @tab-item-hover-text-decoration;
    .hook-tab-item-hover;
}

/* Active */
.uk-tab > .uk-active > a {
    color: @tab-item-active-color;
    .hook-tab-item-active;
}

/* Disabled */
.uk-tab > .uk-disabled > a {
    color: @tab-item-disabled-color;
    .hook-tab-item-disabled;
}


/* Position modifier
 ========================================================================== */

/*
 * Bottom
 */

.uk-tab-bottom {
    .hook-tab-bottom;
}

.uk-tab-bottom > * > a {
    .hook-tab-bottom-item;
}

/*
 * Left + Right
 * 1. Reset Gutter
 */

.uk-tab-left,
.uk-tab-right {
    flex-direction: column;
    /* 1 */
    margin-left: 0;
}

/* 1 */
.uk-tab-left > *,
.uk-tab-right > * { padding-left: 0; }

.uk-tab-left {
    .hook-tab-left;
}

.uk-tab-right {
    .hook-tab-right;
}

.uk-tab-left > * > a {
    text-align: left;
    .hook-tab-left-item;
}

.uk-tab-right > * > a {
    text-align: left;
    .hook-tab-right-item;
}


// Hooks
// ========================================================================

.hook-tab-misc;

.hook-tab() {}
.hook-tab-item() {}
.hook-tab-item-hover() {}
.hook-tab-item-active() {}
.hook-tab-item-disabled() {}
.hook-tab-bottom() {}
.hook-tab-bottom-item() {}
.hook-tab-left() {}
.hook-tab-left-item() {}
.hook-tab-right() {}
.hook-tab-right-item() {}
.hook-tab-misc() {}


// Inverse
// ========================================================================

@inverse-tab-item-color:                       @inverse-global-muted-color;
@inverse-tab-item-hover-color:                 @inverse-global-color;
@inverse-tab-item-active-color:                @inverse-global-emphasis-color;
@inverse-tab-item-disabled-color:              @inverse-global-muted-color;

.hook-inverse() {

    .uk-tab {
        .hook-inverse-tab;
    }

    .uk-tab > * > a {
        color: @inverse-tab-item-color;
        .hook-inverse-tab-item;
    }

    .uk-tab > * > a:hover,
    .uk-tab > * > a:focus{
        color: @inverse-tab-item-hover-color;
        .hook-inverse-tab-item-hover;
    }

    .uk-tab > .uk-active > a {
        color: @inverse-tab-item-active-color;
        .hook-inverse-tab-item-active;
    }

    .uk-tab > .uk-disabled > a {
        color: @inverse-tab-item-disabled-color;
        .hook-inverse-tab-item-disabled;
    }

}

.hook-inverse-tab() {}
.hook-inverse-tab-item() {}
.hook-inverse-tab-item-hover() {}
.hook-inverse-tab-item-active() {}
.hook-inverse-tab-item-disabled() {}
// Name:            Slidenav
// Description:     Component to create previous/next icon navigations
//
// Component:       `uk-slidenav`
//
// Sub-objects:     `uk-slidenav-container`
//
// Modifiers:       `uk-slidenav-previous`
//                  `uk-slidenav-next`
//                  `uk-slidenav-large`
//
// ========================================================================


// Variables
// ========================================================================

@slidenav-padding-vertical:                     5px;
@slidenav-padding-horizontal:                   10px;

@slidenav-color:                                fade(@global-color, 50%);
@slidenav-hover-color:                          fade(@global-color, 90%);
@slidenav-active-color:                         fade(@global-color, 50%);

@slidenav-large-padding-vertical:               10px;
@slidenav-large-padding-horizontal:             @slidenav-large-padding-vertical;


/* ========================================================================
   Component: Slidenav
 ========================================================================== */

/*
 * Adopts `uk-icon`
 */

.uk-slidenav {
    padding: @slidenav-padding-vertical @slidenav-padding-horizontal;
    color: @slidenav-color;
    .hook-slidenav;
}

/* Hover + Focus */
.uk-slidenav:hover,
.uk-slidenav:focus {
    color: @slidenav-hover-color;
    outline: none;
    .hook-slidenav-hover;
}

/* OnClick */
.uk-slidenav:active {
    color: @slidenav-active-color;
    .hook-slidenav-active;
}


/* Icon modifier
 ========================================================================== */

/*
 * Previous
 */

.uk-slidenav-previous {
    .hook-slidenav-previous;
}

/*
 * Next
 */

.uk-slidenav-next {
    .hook-slidenav-next;
}


/* Size modifier
 ========================================================================== */

.uk-slidenav-large {
    padding: @slidenav-large-padding-vertical @slidenav-large-padding-horizontal;
    .hook-slidenav-large;
}


/* Container
 ========================================================================== */

.uk-slidenav-container {
    display: flex;
    .hook-slidenav-container;
}


// Hooks
// ========================================================================

.hook-slidenav-misc;

.hook-slidenav() {}
.hook-slidenav-hover() {}
.hook-slidenav-active() {}
.hook-slidenav-previous() {}
.hook-slidenav-next() {}
.hook-slidenav-large() {}
.hook-slidenav-container() {}
.hook-slidenav-misc() {}


// Inverse
// ========================================================================

@inverse-slidenav-color:                       fade(@inverse-global-color, 70%);
@inverse-slidenav-hover-color:                 fade(@inverse-global-color, 95%);
@inverse-slidenav-active-color:                fade(@inverse-global-color, 70%);

.hook-inverse() {

    .uk-slidenav {
        color: @inverse-slidenav-color;
        .hook-inverse-slidenav;
    }

    .uk-slidenav:hover,
    .uk-slidenav:focus {
        color: @inverse-slidenav-hover-color;
        .hook-inverse-slidenav-hover;
    }

    .uk-slidenav:active {
        color: @inverse-slidenav-active-color;
        .hook-inverse-slidenav-active;
    }

}

.hook-inverse-slidenav() {}
.hook-inverse-slidenav-hover() {}
.hook-inverse-slidenav-active() {}

// Name:            Dotnav
// Description:     Component to create dot navigations
//
// Component:       `uk-dotnav`
//
// Modifier:        `uk-dotnav-vertical`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@dotnav-margin-horizontal:                      12px;
@dotnav-margin-vertical:                        @dotnav-margin-horizontal;

@dotnav-item-width:                             10px;
@dotnav-item-height:                            @dotnav-item-width;
@dotnav-item-border-radius:                     50%;

@dotnav-item-background:                        fade(@global-color, 20%);
@dotnav-item-hover-background:                  fade(@global-color, 60%);
@dotnav-item-onclick-background:                fade(@global-color, 20%);
@dotnav-item-active-background:                 fade(@global-color, 60%);


/* ========================================================================
   Component: Dotnav
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Reset list
 * 3. Gutter
 */

.uk-dotnav {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin: 0;
    padding: 0;
    list-style: none;
    /* 3 */
    margin-left: -@dotnav-margin-horizontal;
    .hook-dotnav;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 */

.uk-dotnav > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @dotnav-margin-horizontal;
}


/* Items
 ========================================================================== */

/*
 * Items
 * 1. Hide text if present
 */

.uk-dotnav > * > * {
    display: block;
    box-sizing: border-box;
    width: @dotnav-item-width;
    height: @dotnav-item-height;
    border-radius: @dotnav-item-border-radius;
    background: @dotnav-item-background;
    /* 1 */
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
    .hook-dotnav-item;
}

/* Hover + Focus */
.uk-dotnav > * > :hover,
.uk-dotnav > * > :focus {
    background-color: @dotnav-item-hover-background;
    outline: none;
    .hook-dotnav-item-hover;
}

/* OnClick */
.uk-dotnav > * > :active {
    background-color: @dotnav-item-onclick-background;
    .hook-dotnav-item-onclick;
}

/* Active */
.uk-dotnav > .uk-active > * {
    background-color: @dotnav-item-active-background;
    .hook-dotnav-item-active;
}


/* Modifier: 'uk-dotnav-vertical'
 ========================================================================== */

/*
 * 1. Change direction
 * 2. Gutter
 */

.uk-dotnav-vertical {
    /* 1 */
    flex-direction: column;
    /* 2 */
    margin-left: 0;
    margin-top: -@dotnav-margin-vertical;
}

/* 2 */
.uk-dotnav-vertical > * {
    padding-left: 0;
    padding-top: @dotnav-margin-vertical;
}


// Hooks
// ========================================================================

.hook-dotnav-misc;

.hook-dotnav() {}
.hook-dotnav-item() {}
.hook-dotnav-item-hover() {}
.hook-dotnav-item-onclick() {}
.hook-dotnav-item-active() {}
.hook-dotnav-misc() {}


// Inverse
// ========================================================================

@inverse-dotnav-item-background:               fade(@inverse-global-color, 50%);
@inverse-dotnav-item-hover-background:         fade(@inverse-global-color, 90%);
@inverse-dotnav-item-onclick-background:       fade(@inverse-global-color, 50%);
@inverse-dotnav-item-active-background:        fade(@inverse-global-color, 90%);

.hook-inverse() {

    .uk-dotnav > * > * {
        background-color: @inverse-dotnav-item-background;
        .hook-inverse-dotnav-item;
    }

    .uk-dotnav > * > :hover,
    .uk-dotnav > * > :focus {
        background-color: @inverse-dotnav-item-hover-background;
        .hook-inverse-dotnav-item-hover;
    }

    .uk-dotnav > * > :active {
        background-color: @inverse-dotnav-item-onclick-background;
        .hook-inverse-dotnav-item-onclick;
    }

    .uk-dotnav > .uk-active > * {
        background-color: @inverse-dotnav-item-active-background;
        .hook-inverse-dotnav-item-active;
    }

}

.hook-inverse-dotnav-item() {}
.hook-inverse-dotnav-item-hover() {}
.hook-inverse-dotnav-item-onclick() {}
.hook-inverse-dotnav-item-active() {}
// Name:            Thumbnav
// Description:     Component to create thumbnail navigations
//
// Component:       `uk-thumbnav`
//
// Modifier:        `uk-thumbnav-vertical`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@thumbnav-margin-horizontal:                    15px;
@thumbnav-margin-vertical:                      @thumbnav-margin-horizontal;


/* ========================================================================
   Component: Thumbnav
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Reset list
 * 3. Gutter
 */

.uk-thumbnav {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin: 0;
    padding: 0;
    list-style: none;
    /* 3 */
    margin-left: -@thumbnav-margin-horizontal;
    .hook-thumbnav;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 */

.uk-thumbnav > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @thumbnav-margin-horizontal;
}


/* Items
 ========================================================================== */

/*
 * Items
 */

.uk-thumbnav > * > * {
    display: inline-block;
    .hook-thumbnav-item;
}

/* Hover + Focus */
.uk-thumbnav > * > :hover,
.uk-thumbnav > * > :focus {
    outline: none;
    .hook-thumbnav-item-hover;
}

/* Active */
.uk-thumbnav > .uk-active > * {
    .hook-thumbnav-item-active;
}


/* Modifier: 'uk-thumbnav-vertical'
 ========================================================================== */

/*
 * 1. Change direction
 * 2. Gutter
 */

.uk-thumbnav-vertical {
    /* 1 */
    flex-direction: column;
    /* 2 */
    margin-left: 0;
    margin-top: -@thumbnav-margin-vertical;
}

/* 2 */
.uk-thumbnav-vertical > * {
    padding-left: 0;
    padding-top: @thumbnav-margin-vertical;
}


// Hooks
// ========================================================================

.hook-thumbnav-misc;

.hook-thumbnav() {}
.hook-thumbnav-item() {}
.hook-thumbnav-item-hover() {}
.hook-thumbnav-item-active() {}
.hook-thumbnav-misc() {}


// Inverse
// ========================================================================

.hook-inverse() {

    .uk-thumbnav > * > * {
        .hook-inverse-thumbnav-item;
    }

    .uk-thumbnav > * > :hover,
    .uk-thumbnav > * > :focus {
        .hook-inverse-thumbnav-item-hover;
    }

    .uk-thumbnav > .uk-active > * {
        .hook-inverse-thumbnav-item-active;
    }

}

.hook-inverse-thumbnav-item() {}
.hook-inverse-thumbnav-item-hover() {}
.hook-inverse-thumbnav-item-active() {}
// Name:            Accordion
// Description:     Component to create accordions
//
// Component:       `uk-accordion`
//
// Sub-objects:     `uk-accordion-title`
//                  `uk-accordion-content`
//
// States:          `uk-open`
//
// ========================================================================


// Variables
// ========================================================================

@accordion-item-margin-top:                    @global-margin;

@accordion-title-font-size:                    @global-medium-font-size;
@accordion-title-line-height:                  1.4;

@accordion-content-margin-top:                 @global-margin;


/* ========================================================================
   Component: Accordion
 ========================================================================== */

.uk-accordion {
    padding: 0;
    list-style: none;
    .hook-accordion;
}


/* Item
 ========================================================================== */

.uk-accordion > :nth-child(n+2) {
    margin-top: @accordion-item-margin-top;
    .hook-accordion-item;
}


/* Title
 ========================================================================== */

.uk-accordion-title {
    margin: 0;
    font-size: @accordion-title-font-size;
    line-height: @accordion-title-line-height;
    cursor: pointer;
    .hook-accordion-title;
}


/* Content
 ========================================================================== */

.uk-accordion-content {
    margin-top: @accordion-content-margin-top;
    .hook-accordion-content;
}

/*
 * Micro clearfix
 */

.uk-accordion-content::before,
.uk-accordion-content::after {
    content: "";
    display: table;
}

.uk-accordion-content::after { clear: both; }

/*
 * Remove margin from the last-child
 */

 .uk-accordion-content > :last-child { margin-bottom: 0; }


// Hooks
// ========================================================================

.hook-accordion-misc;

.hook-accordion() {}
.hook-accordion-item() {}
.hook-accordion-title() {}
.hook-accordion-content() {}
.hook-accordion-misc() {}


// Inverse
// ========================================================================

.hook-inverse() {

    .uk-accordion > :nth-child(n+2) {
        .hook-inverse-accordion-item;
    }

    .uk-accordion-title {
        .hook-inverse-accordion-title;
    }

}

.hook-inverse-accordion-item() {}
.hook-inverse-accordion-title() {}
// Name:            Drop
// Description:     Component to position any element next to any other element.
//
// Component:       `uk-drop`
//
// Modifiers:       `uk-drop-top-*`
//                  `uk-drop-bottom-*`
//                  `uk-drop-left-*`
//                  `uk-drop-right-*`
//                  `uk-drop-stack`
//                  `uk-drop-grid`
//
// States:          `uk-open`
//
// Uses:            Animation
//
// ========================================================================


// Variables
// ========================================================================

@drop-z-index:                              @global-z-index + 20;
@drop-width:                                300px;
@drop-margin:                               @global-margin;


/* ========================================================================
   Component: Drop
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Set position
 * 3. Set a default width
 */

.uk-drop {
    /* 1 */
    display: none;
    /* 2 */
    position: absolute;
    z-index: @drop-z-index;
    /* 3 */
    box-sizing: border-box;
    width: @drop-width;
}

/* Show */
.uk-drop.uk-open { display: block; }


/* Direction / Alignment modifiers
 ========================================================================== */

/* Direction */
[class*='uk-drop-top'] { margin-top: -@drop-margin; }
[class*='uk-drop-bottom'] { margin-top: @drop-margin; }
[class*='uk-drop-left'] { margin-left: -@drop-margin; }
[class*='uk-drop-right'] { margin-left: @drop-margin; }


/* Grid modifiers
 ========================================================================== */

.uk-drop-stack .uk-drop-grid > * { width: 100% !important; }


// Hooks
// ========================================================================

.hook-drop-misc;

.hook-drop-misc() {}

// Name:            Dropdown
// Description:     Component to create dropdown menus
//
// Component:       `uk-dropdown`
//
// Adopted:         `uk-dropdown-nav`
//
// Modifiers:       `uk-dropdown-top-*`
//                  `uk-dropdown-bottom-*`
//                  `uk-dropdown-left-*`
//                  `uk-dropdown-right-*`
//                  `uk-dropdown-stack`
//                  `uk-dropdown-grid`
//
// ========================================================================


// Variables
// ========================================================================

@dropdown-z-index:                              @global-z-index + 20;
@dropdown-min-width:                            200px;
@dropdown-padding:                              15px;
@dropdown-background:                           @global-muted-background;
@dropdown-color:                                @global-color;
@dropdown-margin:                               @global-small-margin;

@dropdown-nav-item-color:                       @global-muted-color;
@dropdown-nav-item-hover-color:                 @global-color;
@dropdown-nav-header-color:                     @global-emphasis-color;
@dropdown-nav-divider-border-width:             @global-border-width;
@dropdown-nav-divider-border:                   @global-border;
@dropdown-nav-sublist-item-color:               @global-muted-color;
@dropdown-nav-sublist-item-hover-color:         @global-color;


/* ========================================================================
   Component: Dropdown
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Set position
 * 3. Set a default width
 * 4. Style
 */

.uk-dropdown {
    /* 1 */
    display: none;
    /* 2 */
    position: absolute;
    z-index: @dropdown-z-index;
    /* 3 */
    box-sizing: border-box;
    min-width: @dropdown-min-width;
    /* 4 */
    padding: @dropdown-padding;
    background: @dropdown-background;
    color: @dropdown-color;
    .hook-dropdown;
}

/* Show */
.uk-dropdown.uk-open { display: block; }


/* Nav
 * Adopts `uk-nav`
 ========================================================================== */

.uk-dropdown-nav {
    white-space: nowrap;
    .hook-dropdown-nav;
}

/*
 * Items
 */

.uk-dropdown-nav > li > a {
    color: @dropdown-nav-item-color;
    .hook-dropdown-nav-item;
}

/* Hover + Focus + Active */
.uk-dropdown-nav > li > a:hover,
.uk-dropdown-nav > li > a:focus,
.uk-dropdown-nav > li.uk-active > a {
    color: @dropdown-nav-item-hover-color;
    .hook-dropdown-nav-item-hover;
}

/*
 * Header
 */

.uk-dropdown-nav .uk-nav-header {
    color: @dropdown-nav-header-color;
    .hook-dropdown-nav-header;
}

/*
 * Divider
 */

.uk-dropdown-nav .uk-nav-divider {
    border-top: @dropdown-nav-divider-border-width solid @dropdown-nav-divider-border;
    .hook-dropdown-nav-divider;
}

/*
 * Sublists
 */

.uk-dropdown-nav .uk-nav-sub a { color: @dropdown-nav-sublist-item-color; }

.uk-dropdown-nav .uk-nav-sub a:hover,
.uk-dropdown-nav .uk-nav-sub a:focus { color: @dropdown-nav-sublist-item-hover-color; }


/* Direction / Alignment modifiers
 ========================================================================== */

/* Direction */
[class*='uk-dropdown-top'] { margin-top: -@dropdown-margin; }
[class*='uk-dropdown-bottom'] { margin-top: @dropdown-margin; }
[class*='uk-dropdown-left'] { margin-left: -@dropdown-margin; }
[class*='uk-dropdown-right'] { margin-left: @dropdown-margin; }


/* Grid modifiers
 ========================================================================== */

.uk-dropdown-stack .uk-dropdown-grid > * { width: 100% !important; }



// Hooks
// ========================================================================

.hook-dropdown-misc;

.hook-dropdown() {}
.hook-dropdown-nav() {}
.hook-dropdown-nav-item() {}
.hook-dropdown-nav-item-hover() {}
.hook-dropdown-nav-header() {}
.hook-dropdown-nav-divider() {}
.hook-dropdown-misc() {}

// Name:            Modal
// Description:     Component to create modal dialogs
//
// Component:       `uk-modal`
//
// Sub-objects:     `uk-modal-page`
//                  `uk-modal-dialog`
//                  `uk-modal-header`
//                  `uk-modal-body`
//                  `uk-modal-footer`
//                  `uk-modal-title`
//                  `uk-modal-close`
//
// Adopted:         `uk-modal-close-default`
//                  `uk-modal-close-outside`
//                  `uk-modal-close-full`
//
// Modifiers:       `uk-modal-container`
//                  `uk-modal-full`
//
// States:          `uk-open`
//
// ========================================================================


// Variables
// ========================================================================

@modal-z-index:                                 @global-z-index + 10;
@modal-background:                              rgba(0,0,0,0.6);

@modal-padding-horizontal:                      15px;
@modal-padding-horizontal-s:                    @global-gutter;
@modal-padding-horizontal-m:                    @global-medium-gutter;
@modal-padding-vertical:                        @modal-padding-horizontal;
@modal-padding-vertical-s:                      50px;

@modal-dialog-width:                            600px;
@modal-dialog-background:                       @global-background;

@modal-container-width:                         1200px;

@modal-body-padding-horizontal:                 @global-gutter;
@modal-body-padding-vertical:                   @global-gutter;

@modal-header-padding-horizontal:               @global-gutter;
@modal-header-padding-vertical:                 (@modal-header-padding-horizontal / 2);
@modal-header-background:                       @global-muted-background;

@modal-footer-padding-horizontal:               @global-gutter;
@modal-footer-padding-vertical:                 (@modal-footer-padding-horizontal / 2);
@modal-footer-background:                       @global-muted-background;

@modal-title-font-size:                         @global-xlarge-font-size;
@modal-title-line-height:                       1.3;

@modal-close-position:                          @global-small-margin;
@modal-close-padding:                           5px;

@modal-close-outside-position:                  0;
@modal-close-outside-translate:                 100%;
@modal-close-outside-color:                     lighten(@global-inverse-color, 20%);
@modal-close-outside-hover-color:               @global-inverse-color;


/* ========================================================================
   Component: Modal
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Set position
 * 3. Allow scrolling for the modal dialog
 * 4. Horizontal padding
 * 5. Mask the background page
 * 6. Fade-in transition
 */

.uk-modal {
    /* 1 */
    display: none;
    /* 2 */
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: @modal-z-index;
    /* 3 */
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    /* 4 */
    padding: @modal-padding-vertical @modal-padding-horizontal;
    /* 5 */
    background: @modal-background;
    /* 6 */
    opacity: 0;
    transition: opacity 0.15s linear;
    .hook-modal;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-modal { padding: @modal-padding-vertical-s @modal-padding-horizontal-s; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-modal {
        padding-left: @modal-padding-horizontal-m;
        padding-right: @modal-padding-horizontal-m;
    }

}

/*
 * Open
 */

.uk-modal.uk-open { opacity: 1; }


/* Page
 ========================================================================== */

/*
 * Prevent scrollbars
 */

.uk-modal-page { overflow: hidden; }


/* Dialog
 ========================================================================== */

/*
 * 1. Create position context for spinner and close button
 * 2. Dimensions
 * 3. Fix `max-width: 100%` not working in combination with flex and responsive images in IE11
 *    `!important` needed to overwrite `uk-width-auto`. See `#modal-media-image` in tests
 * 4. Style
 * 5. Slide-in transition
 */

.uk-modal-dialog {
    /* 1 */
    position: relative;
    /* 2 */
    box-sizing: border-box;
    margin: 0 auto;
    width: @modal-dialog-width;
    /* 3 */
    max-width: ~'calc(100% - 0.01px)' !important;
    /* 4 */
    background: @modal-dialog-background;
    /* 5 */
    opacity: 0;
    transform: translateY(-100px);
    transition: 0.3s linear;
    transition-property: opacity, transform;
    .hook-modal-dialog;
}

/*
 * Open
 */

.uk-open > .uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
}


/* Size modifier
 ========================================================================== */

/*
 * Container size
 * Take the same size as the Container component
 */

.uk-modal-container .uk-modal-dialog { width: @modal-container-width; }

/*
 * Full size
 * 1. Remove padding and background from modal
 * 2. Reset all default declarations from modal dialog
 */

/* 1 */
.uk-modal-full {
    padding: 0;
    background: none;
}

/* 2 */
.uk-modal-full .uk-modal-dialog {
    margin: 0;
    width: 100%;
    max-width: 100%;
    transform: translateY(0);
    .hook-modal-full;
}


/* Sections
 ========================================================================== */

.uk-modal-body {
    padding: @modal-body-padding-vertical @modal-body-padding-horizontal;
    .hook-modal-body;
}

.uk-modal-header {
    padding: @modal-header-padding-vertical @modal-header-padding-horizontal;
    background: @modal-header-background;
    .hook-modal-header;
}

.uk-modal-footer {
    padding: @modal-footer-padding-vertical @modal-footer-padding-horizontal;
    background: @modal-footer-background;
    .hook-modal-footer;
}

/*
 * Micro clearfix
 */

.uk-modal-body::before,
.uk-modal-body::after,
.uk-modal-header::before,
.uk-modal-header::after,
.uk-modal-footer::before,
.uk-modal-footer::after {
    content: "";
    display: table;
}

.uk-modal-body::after,
.uk-modal-header::after,
.uk-modal-footer::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-modal-body > :last-child,
.uk-modal-header > :last-child,
.uk-modal-footer > :last-child { margin-bottom: 0; }


/* Title
 ========================================================================== */

.uk-modal-title {
    font-size: @modal-title-font-size;
    line-height: @modal-title-line-height;
    .hook-modal-title;
}


/* Close
 * Adopts `uk-close`
 ========================================================================== */

[class*='uk-modal-close-'] {
    position: absolute;
    z-index: @modal-z-index;
    top: @modal-close-position;
    right: @modal-close-position;
    padding: @modal-close-padding;
    .hook-modal-close;
}

/*
 * Remove margin from adjacent element
 */

[class*='uk-modal-close-']:first-child + * { margin-top: 0; }

/*
 * Hover
 */

[class*='uk-modal-close-']:hover {
    .hook-modal-close-hover;
}

/*
 * Default
 */

.uk-modal-close-default {
    .hook-modal-close-default;
}

.uk-modal-close-default:hover {
    .hook-modal-close-default-hover;
}

/*
 * Outside
 * 1. Prevent scrollbar on small devices
 */

.uk-modal-close-outside {
    top: @modal-close-outside-position;
    /* 1 */
    right: -@modal-close-padding;
    transform: translate(0, -(@modal-close-outside-translate));
    color: @modal-close-outside-color;
    .hook-modal-close-outside;
}

.uk-modal-close-outside:hover {
    color: @modal-close-outside-hover-color;
    .hook-modal-close-outside-hover;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    /* 1 */
    .uk-modal-close-outside {
        right: @modal-close-outside-position;
        transform: translate(@modal-close-outside-translate, -(@modal-close-outside-translate));
    }

}

/*
 * Full
 */

.uk-modal-close-full {
    .hook-modal-close-full;
}

.uk-modal-close-full:hover {
    .hook-modal-close-full-hover;
}


// Hooks
// ========================================================================

.hook-modal-misc;

.hook-modal() {}
.hook-modal-dialog() {}
.hook-modal-full() {}
.hook-modal-header() {}
.hook-modal-body() {}
.hook-modal-footer() {}
.hook-modal-title() {}
.hook-modal-close() {}
.hook-modal-close-hover() {}
.hook-modal-close-default() {}
.hook-modal-close-default-hover() {}
.hook-modal-close-outside() {}
.hook-modal-close-outside-hover() {}
.hook-modal-close-full() {}
.hook-modal-close-full-hover() {}
.hook-modal-misc() {}

// Name:            Lightbox
// Description:     Component to create an lightbox image gallery
//
// Component:       `uk-lightbox`
//
// Sub-objects:     `uk-lightbox-page`
//                  `uk-lightbox-items`
//                  `uk-lightbox-toolbar`
//                  `uk-lightbox-toolbar-icon`
//                  `uk-lightbox-button`
//                  `uk-lightbox-caption`
//                  `uk-lightbox-iframe`
//
// States:          `uk-open`
//
// ========================================================================


// Variables
// ========================================================================

@lightbox-z-index:                              @global-z-index + 10;
@lightbox-background:                           #000;

@lightbox-item-color:                           rgba(255,255,255,0.7);

@lightbox-toolbar-padding-vertical:             10px;
@lightbox-toolbar-padding-horizontal:           10px;
@lightbox-toolbar-background:                   rgba(0,0,0,0.3);
@lightbox-toolbar-color:                        rgba(255,255,255,0.7);

@lightbox-toolbar-icon-padding:                 5px;
@lightbox-toolbar-icon-color:                   rgba(255,255,255,0.7);

@lightbox-toolbar-icon-hover-color:             #fff;

@lightbox-button-size:                          50px;
@lightbox-button-background:                    @lightbox-toolbar-background;
@lightbox-button-color:                         rgba(255,255,255,0.7);

@lightbox-button-hover-color:                   #fff;


/* ========================================================================
   Component: Lightbox
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Set position
 * 3. Allow scrolling for the modal dialog
 * 4. Horizontal padding
 * 5. Mask the background page
 * 6. Fade-in transition
 */

.uk-lightbox {
    /* 1 */
    display: none;
    /* 2 */
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: @lightbox-z-index;
    /* 5 */
    background: @lightbox-background;
    /* 6 */
    opacity: 0;
    transition: opacity 0.15s linear;
    .hook-lightbox;
}

/*
 * Open
 * 1. Center child
 * 2. Fade-in
 */

.uk-lightbox.uk-open {
    display: block;
    /* 2 */
    opacity: 1;
}


/* Page
 ========================================================================== */

/*
 * Prevent scrollbars
 */

.uk-lightbox-page { overflow: hidden; }


/* Item
 ========================================================================== */

/*
 * 1. Center child within the viewport
 * 2. Not visible by default
 * 3. Color needed for spinner icon
 * 4. Optimize animation
 * 5. Responsiveness
 *    Using `vh` for `max-height` to fix image proportions after resize in Safari and Opera
 *    Using `vh` and `vw` to make responsive image work in IE11
 */

.uk-lightbox-items > * {
    /* 1 */
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    /* 2 */
    display: none;
    justify-content: center;
    align-items: center;
    /* 3 */
    color: @lightbox-item-color;
    /* 4 */
    will-change: transform, opacity;
    .hook-lightbox-item;
}

/* 5 */
.uk-lightbox-items > * > * {
    max-width: 100vw;
    max-height: 100vh;
}

.uk-lightbox-items > * > :not(iframe) {
    width: auto;
    height: auto;
}

.uk-lightbox-items > .uk-active { display: flex; }

/* Toolbar
 ========================================================================== */

.uk-lightbox-toolbar {
    padding: @lightbox-toolbar-padding-vertical @lightbox-toolbar-padding-horizontal;
    background: @lightbox-toolbar-background;
    color: @lightbox-toolbar-color;
    .hook-lightbox-toolbar;
}

.uk-lightbox-toolbar * { color: @lightbox-toolbar-color; }


/* Toolbar Icon (Close)
 ========================================================================== */

.uk-lightbox-toolbar-icon {
    padding: @lightbox-toolbar-icon-padding;
    color: @lightbox-toolbar-icon-color;
    .hook-lightbox-toolbar-icon;
}

/*
 * Hover
 */

.uk-lightbox-toolbar-icon:hover {
    color: @lightbox-toolbar-icon-hover-color;
    .hook-lightbox-toolbar-icon-hover;
}



/* Button (Slidenav)
 ========================================================================== */

/*
 * 1. Center icon vertically and horizontally
 */

.uk-lightbox-button {
    box-sizing: border-box;
    width: @lightbox-button-size;
    height: @lightbox-button-size;
    background: @lightbox-button-background;
    color: @lightbox-button-color;
    /* 1 */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    .hook-lightbox-button;
}

/*
 * Hover
 */

.uk-lightbox-button:hover {
    color: @lightbox-button-hover-color;
    .hook-lightbox-button-hover;
}


/* Caption
 ========================================================================== */

.uk-lightbox-caption {}


/* Iframe
 ========================================================================== */

.uk-lightbox-iframe {
    width: 80%;
    height: 80%;
}


// Hooks
// ========================================================================

.hook-lightbox-misc;

.hook-lightbox() {}
.hook-lightbox-item() {}
.hook-lightbox-toolbar() {}
.hook-lightbox-toolbar-icon() {}
.hook-lightbox-toolbar-icon-hover() {}
.hook-lightbox-button() {}
.hook-lightbox-button-hover() {}
.hook-lightbox-misc() {}

// Name:            Slideshow
// Description:     Component to create slideshows
//
// Component:       `uk-slideshow`
//
// Sub-objects:     `uk-slideshow-items`
//
// States:          `uk-active`
//
// ========================================================================


/* ========================================================================
   Component: Slideshow
 ========================================================================== */

/*
 * 1. Prevent tab highlighting on iOS.
 */

.uk-slideshow {
    /* 1 */
    -webkit-tap-highlight-color: transparent;
    .hook-slideshow;
}


/* Items
 ========================================================================== */

/*
 * 1. Create position and stacking context
 * 2. Reset list
 * 3. Clip child elements
 * 4. Prevent displaying the callout information on iOS.
 */

.uk-slideshow-items {
    /* 1 */
    position: relative;
    z-index: 0;
    /* 2 */
    margin: 0;
    padding: 0;
    list-style: none;
    /* 3 */
    overflow: hidden;
    /* 4 */
    -webkit-touch-callout: none;
}


/* Item
 ========================================================================== */

/*
 * 1. Position items above each other
 * 2. Take the full width
 * 3. Clip child elements, e.g. for `uk-cover`
 * 4. Optimize animation
 */

.uk-slideshow-items > * {
    /* 1 */
    position: absolute;
    top: 0;
    left: 0;
    /* 2 */
    right: 0;
    bottom: 0;
    /* 3 */
    overflow: hidden;
    /* 4 */
    will-change: transform, opacity;
}

/*
 * Hide not active items
 */

.uk-slideshow-items > :not(.uk-active) { display: none; }


// Hooks
// ========================================================================

.hook-slideshow-misc;

.hook-slideshow() {}
.hook-slideshow-misc() {}

// Name:            Sticky
// Description:     Component to make elements sticky in the viewport
//
// Component:       `uk-sticky`
//
// Modifier:        `uk-sticky-fixed`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@sticky-z-index:                                @global-z-index - 20;

@sticky-animation-duration:                     0.2s;
@sticky-reverse-animation-duration:             0.2s;


/* ========================================================================
   Component: Sticky
 ========================================================================== */

/*
 * 1. Resolve frame rate issues on devices with lower frame rates by forcing hardware acceleration
 */

.uk-sticky-fixed {
    z-index: @sticky-z-index;
    box-sizing: border-box;
    margin: 0 !important;
    /* 1 */
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

/*
 * Faster animations
 */

.uk-sticky[class*='uk-animation-'] { animation-duration: @sticky-animation-duration; }

.uk-sticky.uk-animation-reverse { animation-duration: @sticky-reverse-animation-duration; }


// Hooks
// ========================================================================

.hook-sticky-misc;

.hook-sticky-misc() {}

// Name:            Off-canvas
// Description:     Component to create an off-canvas sidebar
//
// Component:       `uk-offcanvas`
//
// Sub-objects:     `uk-offcanvas-bar`
//                  `uk-offcanvas-container`
//                  `uk-offcanvas-content`
//                  `uk-offcanvas-page`
//
// Adopted:         `uk-offcanvas-close`
//
// Modifiers:       `uk-offcanvas-flip`
//                  `uk-offcanvas-bar-animation`
//                  `uk-offcanvas-reveal`
//                  `uk-offcanvas-overlay`
//                  `uk-offcanvas-content-animation`
//
// States:          `uk-open`
//
// ========================================================================


// Variables
// ========================================================================

@offcanvas-z-index:                             @global-z-index;

@offcanvas-bar-width:                           270px;
@offcanvas-bar-padding-vertical:                @global-margin;
@offcanvas-bar-padding-horizontal:              @global-margin;
@offcanvas-bar-background:                      @global-secondary-background;
@offcanvas-bar-color-mode:                      light;

@offcanvas-bar-width-m:                         350px;
@offcanvas-bar-padding-vertical-m:              @global-medium-gutter;
@offcanvas-bar-padding-horizontal-m:            @global-medium-gutter;

@offcanvas-close-position:                      20px;
@offcanvas-close-padding:                       5px;

@offcanvas-overlay-background:                  rgba(0,0,0,0.1);


/* ========================================================================
   Component: Off-canvas
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Set position
 */

.uk-offcanvas {
    /* 1 */
    display: none;
    /* 2 */
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: @offcanvas-z-index;
}

/*
 * Flip modifier
 */

.uk-offcanvas-flip .uk-offcanvas {
    right: 0;
    left: auto;
}


/* Bar
 ========================================================================== */

/*
 * 1. Set position
 * 2. Size and style
 * 3. Allow scrolling
 * 4. Transform
 */

.uk-offcanvas-bar {
    /* 1 */
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    /* 2 */
    box-sizing: border-box;
    width: @offcanvas-bar-width;
    padding: @offcanvas-bar-padding-vertical @offcanvas-bar-padding-horizontal;
    background: @offcanvas-bar-background;
    /* 3 */
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    /* 4 */
    transform: translateX(-100%);
    .hook-offcanvas-bar;
}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-offcanvas-bar {
        width: @offcanvas-bar-width-m;
        padding: @offcanvas-bar-padding-vertical-m @offcanvas-bar-padding-horizontal-m;
    }

}

// Color Mode
.uk-offcanvas-bar:extend(.uk-light all) when (@offcanvas-bar-color-mode = light) {}
.uk-offcanvas-bar:extend(.uk-dark all) when (@offcanvas-bar-color-mode = dark) {}

/* Flip modifier */
.uk-offcanvas-flip .uk-offcanvas-bar {
    left: auto;
    right: 0;
    transform: translateX(100%);
}

/*
 * Open
 */

.uk-open > .uk-offcanvas-bar { transform: translateX(0); }

/*
 * Slide Animation (Used in slide and push mode)
 */

.uk-offcanvas-bar-animation { transition: transform 0.3s ease-out; }

/*
 * Reveal Animation
 * 1. Set position
 * 2. Clip the bar
 * 3. Animation
 * 4. Reset transform
 */

.uk-offcanvas-reveal {
    /* 1 */
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    /* 2 */
    width: 0;
    overflow: hidden;
    /* 3 */
    transition: width 0.3s ease-out;
}

.uk-offcanvas-reveal .uk-offcanvas-bar {
    /* 4 */
    transform: translateX(0);
}

.uk-open > .uk-offcanvas-reveal { width: @offcanvas-bar-width; }

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-open > .uk-offcanvas-reveal { width: @offcanvas-bar-width-m; }

}

/*
 * Flip modifier
 */

.uk-offcanvas-flip .uk-offcanvas-reveal {
    right: 0;
    left: auto;
}


/* Close
 * Adopts `uk-close`
 ========================================================================== */

.uk-offcanvas-close {
    position: absolute;
    z-index: @offcanvas-z-index;
    top: @offcanvas-close-position;
    right: @offcanvas-close-position;
    padding: @offcanvas-close-padding;
    .hook-offcanvas-close;
}


/* Overlay
 ========================================================================== */

/*
 * Overlay the whole page. Needed for the `::before`
 * 1. Using `100vw` so no modification is needed when off-canvas is flipped
 * 2. Allow for closing with swipe gesture on devices with pointer events.
 */

.uk-offcanvas-overlay {
    /* 1 */
    width: 100vw;
    /* 2 */
    touch-action: none;
}

/*
 * 1. Mask the whole page
 * 2. Fade-in transition
 */

.uk-offcanvas-overlay::before {
    /* 1 */
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: @offcanvas-overlay-background;
    /* 2 */
    opacity: 0;
    transition: opacity 0.15s linear;
    .hook-offcanvas-overlay;
}

.uk-offcanvas-overlay.uk-open::before { opacity: 1; }


/* Container
 ========================================================================== */

/*
 * Prevent horizontal scrollbar when the content is slide-out
 * Has to be on the `html` element too to make it work on the `body`
 */

.uk-offcanvas-page,
.uk-offcanvas-container { overflow-x: hidden; }

/*
 * Prevent all scrollbars if overlay is used
 */

.uk-offcanvas-container-overlay { overflow: hidden; }


/* Content
 ========================================================================== */

/*
 * Prepare slide-out animation (Used in reveal and push mode)
 * Using `position: left` instead of `transform` because position `fixed` elements like sticky navbars
 * lose their fixed state and behaves like `absolute` within a transformed container
 * Note: JS sets a fixed width and height so the page can slide-out without shrinking
 * 1. Smooth scrolling
 */

.uk-offcanvas-container .uk-offcanvas-content {
    position: relative;
    left: 0;
    transition: left 0.3s ease-out;
    /* 1 */
    -webkit-overflow-scrolling: touch;
}

/* Disable scrolling if overlay mode */
.uk-offcanvas-overlay .uk-offcanvas-content { overflow-y: hidden; }

/*
 * Activate slide-out animation
 */

:not(.uk-offcanvas-flip) > .uk-offcanvas-content-animation { left: @offcanvas-bar-width; }

.uk-offcanvas-flip > .uk-offcanvas-content-animation { left: -@offcanvas-bar-width; }

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    :not(.uk-offcanvas-flip) > .uk-offcanvas-content-animation { left: @offcanvas-bar-width-m; }

    .uk-offcanvas-flip > .uk-offcanvas-content-animation { left: -@offcanvas-bar-width-m; }

}


// Hooks
// ========================================================================

.hook-offcanvas-misc;

.hook-offcanvas-bar() {}
.hook-offcanvas-close() {}
.hook-offcanvas-overlay() {}
.hook-offcanvas-misc() {}

// Name:            Switcher
// Description:     Component to navigate through different content panes
//
// Component:       `uk-switcher`
//
// States:          `uk-active`
//
// ========================================================================


/* ========================================================================
   Component: Switcher
 ========================================================================== */

/*
 * Reset list
 */

.uk-switcher {
    margin: 0;
    padding: 0;
    list-style: none;
}


/* Items
 ========================================================================== */

/*
 * Hide not active items
 */

.uk-switcher > :not(.uk-active) { display: none; }

/*
 * Remove margin from the last-child
 */

.uk-switcher > * > :last-child { margin-bottom: 0; }


// Hooks
// ========================================================================

.hook-switcher-misc;

.hook-switcher-misc() {}
// Name:            Iconnav
// Description:     Component to create icon navigations
//
// Component:       `uk-iconnav`
//
// Modifier:        `uk-iconnav-vertical`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@iconnav-margin-horizontal:                      @global-small-margin;
@iconnav-margin-vertical:                        @iconnav-margin-horizontal;

@iconnav-item-color:                             @global-muted-color;

@iconnav-item-hover-color:                       @global-color;

@iconnav-item-active-color:                      @global-color;


/* ========================================================================
   Component: Iconnav
 ========================================================================== */

/*
 * 1. Allow items to wrap into the next line
 * 2. Reset list
 * 3. Gutter
 */

.uk-iconnav {
    display: flex;
    /* 1 */
    flex-wrap: wrap;
    /* 2 */
    margin: 0;
    padding: 0;
    list-style: none;
    /* 3 */
    margin-left: -@iconnav-margin-horizontal;
    .hook-iconnav;
}

/*
 * 1. Space is allocated solely based on content dimensions: 0 0 auto
 * 2. Gutter
 */

.uk-iconnav > * {
    /* 1 */
    flex: none;
    /* 2 */
    padding-left: @iconnav-margin-horizontal;
}


/* Items
 ========================================================================== */

/*
 * Items
 * 1. Prevent gap if child element is `inline-block`, e.g. an icon
 * 2. Style
 */

.uk-iconnav > * > * {
    /* 1 */
    display: block;
    /* 2 */
    color: @iconnav-item-color;
    .hook-iconnav-item;
}

/* Hover + Focus */
.uk-iconnav > * > :hover,
.uk-iconnav > * > :focus {
    color: @iconnav-item-hover-color;
    outline: none;
    .hook-iconnav-item-hover;
}

/* Active */
.uk-iconnav > .uk-active > * {
    color: @iconnav-item-active-color;
    .hook-iconnav-item-active;
}


/* Modifier: 'uk-iconnav-vertical'
 ========================================================================== */

/*
 * 1. Change direction
 * 2. Gutter
 */

.uk-iconnav-vertical {
    /* 1 */
    flex-direction: column;
    /* 2 */
    margin-left: 0;
    margin-top: -@iconnav-margin-vertical;
}

/* 2 */
.uk-iconnav-vertical > * {
    padding-left: 0;
    padding-top: @iconnav-margin-vertical;
}


// Hooks
// ========================================================================

.hook-iconnav-misc;

.hook-iconnav() {}
.hook-iconnav-item() {}
.hook-iconnav-item-hover() {}
.hook-iconnav-item-active() {}
.hook-iconnav-misc() {}


// Inverse
// ========================================================================

@inverse-iconnav-item-color:               @inverse-global-muted-color;
@inverse-iconnav-item-hover-color:         @inverse-global-color;
@inverse-iconnav-item-active-color:        @inverse-global-color;

.hook-inverse() {

    .uk-iconnav > * > * {
        color: @inverse-iconnav-item-color;
        .hook-inverse-iconnav-item;
    }

    .uk-iconnav > * > :hover,
    .uk-iconnav > * > :focus {
        color: @inverse-iconnav-item-hover-color;
        .hook-inverse-iconnav-item-hover;
    }

    .uk-iconnav > .uk-active > * {
        color: @inverse-iconnav-item-active-color;
        .hook-inverse-iconnav-item-active;
    }

}

.hook-inverse-iconnav-item() {}
.hook-inverse-iconnav-item-hover() {}
.hook-inverse-iconnav-item-active() {}
// Name:            Notification
// Description:     Component to create notification messages
//
// Component:       `uk-notification`
//
// Sub-objects:     `uk-notification-message`
//
// Adopted:         `uk-notification-close`
//
// Modifiers:       `uk-notification-top-center`
//                  `uk-notification-top-right`
//                  `uk-notification-bottom-left`
//                  `uk-notification-bottom-center`
//                  `uk-notification-bottom-right`
//                  `uk-notification-message-primary`
//                  `uk-notification-message-success`
//                  `uk-notification-message-warning`
//                  `uk-notification-message-danger`
//
// ========================================================================


// Variables
// ========================================================================

@notification-position:                               10px;
@notification-z-index:                                @global-z-index + 40;
@notification-width:                                  350px;

@notification-message-margin-bottom:                  10px;
@notification-message-padding:                        @global-small-gutter;
@notification-message-background:                     @global-muted-background;
@notification-message-color:                          @global-color;
@notification-message-font-size:                      @global-medium-font-size;
@notification-message-line-height:                    1.4;

@notification-close-top:                              @notification-message-padding + 5px;
@notification-close-right:                            @notification-message-padding;

@notification-message-primary-color:                  @global-primary-background;
@notification-message-success-color:                  @global-success-background;
@notification-message-warning-color:                  @global-warning-background;
@notification-message-danger-color:                   @global-danger-background;


/* ========================================================================
   Component: Notification
 ========================================================================== */

/*
 * 1. Set position
 * 2. Dimensions
 */

.uk-notification {
    /* 1 */
    position: fixed;
    top: @notification-position;
    left: @notification-position;
    z-index: @notification-z-index;
    /* 2 */
    box-sizing: border-box;
    width: @notification-width;
    .hook-notification;
}


/* Position modifiers
========================================================================== */

.uk-notification-top-right,
.uk-notification-bottom-right {
    left: auto;
    right: @notification-position;
}

.uk-notification-top-center,
.uk-notification-bottom-center {
    left: 50%;
    margin-left: (@notification-width / -2);
}

.uk-notification-bottom-left,
.uk-notification-bottom-right,
.uk-notification-bottom-center {
    top: auto;
    bottom: @notification-position;
}


/* Responsiveness
========================================================================== */

/* Phones portrait and smaller */
@media (max-width: @breakpoint-xsmall-max) {

    .uk-notification {
        left: @notification-position;
        right: @notification-position;
        width: auto;
        margin: 0;
    }

}


/* Message
========================================================================== */

.uk-notification-message {
    position: relative;
    margin-bottom: @notification-message-margin-bottom;
    padding: @notification-message-padding;
    background: @notification-message-background;
    color: @notification-message-color;
    font-size: @notification-message-font-size;
    line-height: @notification-message-line-height;
    cursor: pointer;
    .hook-notification-message;
}


/* Close
 * Adopts `uk-close`
 ========================================================================== */

.uk-notification-close {
    display: none;
    position: absolute;
    top: @notification-close-top;
    right: @notification-close-right;
    .hook-notification-close;
}

.uk-notification-message:hover .uk-notification-close { display: block; }


/* Style modifiers
 ========================================================================== */

/*
 * Primary
 */

.uk-notification-message-primary {
    color: @notification-message-primary-color;
    .hook-notification-message-primary;
}

/*
 * Success
 */

.uk-notification-message-success {
    color: @notification-message-success-color;
    .hook-notification-message-success;
}

/*
 * Warning
 */

.uk-notification-message-warning {
    color: @notification-message-warning-color;
    .hook-notification-message-warning;
}

/*
 * Danger
 */

.uk-notification-message-danger {
    color: @notification-message-danger-color;
    .hook-notification-message-danger;
}


// Hooks
// ========================================================================

.hook-notification-misc;

.hook-notification() {}
.hook-notification-message() {}
.hook-notification-close() {}
.hook-notification-message-primary() {}
.hook-notification-message-success() {}
.hook-notification-message-warning() {}
.hook-notification-message-danger() {}
.hook-notification-misc() {}

// Name:            Tooltip
// Description:     Component to create tooltips
//
// Component:       `uk-tooltip`
//
// Modifiers        `uk-tooltip-top`
//                  `uk-tooltip-top-left`
//                  `uk-tooltip-top-right`
//                  `uk-tooltip-bottom`
//                  `uk-tooltip-bottom-left`
//                  `uk-tooltip-bottom-right`
//                  `uk-tooltip-left`
//                  `uk-tooltip-right`
//
// States:          `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@tooltip-z-index:                               @global-z-index + 30;
@tooltip-max-width:                             200px;
@tooltip-padding-vertical:                      3px;
@tooltip-padding-horizontal:                    6px;
@tooltip-background:                            #666;
@tooltip-border-radius:                         2px;
@tooltip-color:                                 @global-inverse-color;
@tooltip-font-size:                             12px;

@tooltip-margin:                                10px;


/* ========================================================================
   Component: Tooltip
 ========================================================================== */

/*
 * 1. Hide by default
 * 2. Position
 * 3. Dimensions
 * 4. Style
 */

.uk-tooltip {
    /* 1 */
    display: none;
    /* 2 */
    position: absolute;
    z-index: @tooltip-z-index;
    /* 3 */
    box-sizing: border-box;
    max-width: @tooltip-max-width;
    padding: @tooltip-padding-vertical @tooltip-padding-horizontal;
    /* 4 */
    background: @tooltip-background;
    border-radius: @tooltip-border-radius;
    color: @tooltip-color;
    font-size: @tooltip-font-size;
    .hook-tooltip;
}

/* Show */
.uk-tooltip.uk-active { display: block; }


/* Direction / Alignment modifiers
 ========================================================================== */

/* Direction */
[class*='uk-tooltip-top'] { margin-top: -@tooltip-margin; }
[class*='uk-tooltip-bottom'] { margin-top: @tooltip-margin; }
[class*='uk-tooltip-left'] { margin-left: -@tooltip-margin; }
[class*='uk-tooltip-right'] { margin-left: @tooltip-margin; }


// Hooks
// ========================================================================

.hook-tooltip-misc;

.hook-tooltip() {}
.hook-tooltip-misc() {}

// Name:            Placeholder
// Description:     Component to create placeholder boxes
//
// Component:       `uk-placeholder`
//
// ========================================================================


// Variables
// ========================================================================

@placeholder-margin-vertical:                   @global-margin;
@placeholder-padding-vertical:                  @global-gutter;
@placeholder-padding-horizontal:                @global-gutter;
@placeholder-background:                        @global-muted-background;


/* ========================================================================
   Component: Placeholder
 ========================================================================== */

.uk-placeholder {
    margin-bottom: @placeholder-margin-vertical;
    padding: @placeholder-padding-vertical @placeholder-padding-horizontal;
    background: @placeholder-background;
    .hook-placeholder;
}

/* Add margin if adjacent element */
* + .uk-placeholder { margin-top: @placeholder-margin-vertical; }

/*
 * Remove margin from the last-child
 */

.uk-placeholder > :last-child { margin-bottom: 0; }


// Hooks
// ========================================================================

.hook-placeholder-misc;

.hook-placeholder() {}
.hook-placeholder-misc() {}
// Name:            Progress
// Description:     Component to create progress bars
//
// Component:       `uk-progress`
//
// ========================================================================


// Variables
// ========================================================================

@progress-height:                               15px;
@progress-margin-vertical:                      @global-margin;
@progress-background:                           @global-muted-background;

@progress-bar-background:                       @global-primary-background;


/* ========================================================================
   Component: Progress
 ========================================================================== */

/*
 * 1. Remove default style
 * 2. Behave like a block element
 * 3. Remove borders in Firefox and Edge
 * 4. Set background color for progress container in Firefox, IE11 and Edge
 * 5. Style
 */

.uk-progress {
    /* 1 */
    -webkit-appearance: none;
    -moz-appearance: none;
    /* 2 */
    display: block;
    width: 100%;
    /* 3 */
    border: 0;
    /* 4 */
    background-color: @progress-background;
    /* 5 */
    margin-bottom: @progress-margin-vertical;
    height: @progress-height;
    .hook-progress;
}

/* Add margin if adjacent element */
* + .uk-progress { margin-top: @progress-margin-vertical; }

/*
 * Remove animated circles for indeterminate state in IE11 and Edge
 */

.uk-progress:indeterminate { color: transparent; }

/*
 * Progress container
 * 2. Remove progress bar for indeterminate state in Firefox
 */

.uk-progress::-webkit-progress-bar {
  background-color: @progress-background;
  .hook-progress;
}

/* 2 */
.uk-progress:indeterminate::-moz-progress-bar { width: 0; }

/*
 * Progress bar
 * 1. Remove right border in IE11 and Edge
 */

.uk-progress::-webkit-progress-value {
    background-color: @progress-bar-background;
    transition: width 0.6s ease;
    .hook-progress-bar;
}

.uk-progress::-moz-progress-bar {
    background-color: @progress-bar-background;
    .hook-progress-bar;
}

.uk-progress::-ms-fill {
    background-color: @progress-bar-background;
    transition: width 0.6s ease;
    /* 1 */
    border: 0;
    .hook-progress-bar;
}


// Hooks
// ========================================================================

.hook-progress-misc;

.hook-progress() {}
.hook-progress-bar() {}
.hook-progress-misc() {}

// Name:            Sortable
// Description:     Component to create sortable grids and lists
//
// Component:       `uk-sortable`
//
// Sub-objects:     `uk-sortable-drag`
//                  `uk-sortable-placeholder`
//                  `uk-sortable-handle`
//
// Modifiers:       `uk-sortable-empty`
//
// States:          `uk-drag`
//
// ========================================================================


// Variables
// ========================================================================

@sortable-dragged-z-index:                      @global-z-index + 50;

@sortable-placeholder-opacity:                  0;

@sortable-empty-height:                         50px;


/* ========================================================================
   Component: Sortable
 ========================================================================== */

.uk-sortable {
    position: relative;
    .hook-sortable;
}

/*
 * Deactivate browser touch actions in IE11
 */

.uk-sortable > * { touch-action: none; }

/*
 * Deactivate pointer-events on SVGs in Safari
 */

.uk-sortable svg { pointer-events: none; }

/*
 * Remove margin from the last-child
 */

.uk-sortable > :last-child { margin-bottom: 0; }


/* Drag
 ========================================================================== */

.uk-sortable-drag {
    position: absolute !important;
    z-index: @sortable-dragged-z-index !important;
    pointer-events: none;
    .hook-sortable-drag;
}


/* Placeholder
 ========================================================================== */

.uk-sortable-placeholder {
    opacity: @sortable-placeholder-opacity;
    .hook-sortable-placeholder;
}


/* Empty modifier
 ========================================================================== */

.uk-sortable-empty {
    min-height: @sortable-empty-height;
    .hook-sortable-empty;
}


/* Handle
 ========================================================================== */

/* Hover */
.uk-sortable-handle:hover { cursor: move; }



// Hooks
// ========================================================================

.hook-sortable-misc;

.hook-sortable() {}
.hook-sortable-drag() {}
.hook-sortable-placeholder() {}
.hook-sortable-empty() {}
.hook-sortable-misc() {}

// Name:            Countdown
// Description:     Component to create countdown timers
//
// Component:       `uk-countdown`
//
// Sub-objects:     `uk-countdown-number`
//                  `uk-countdown-separator`
//                  `uk-countdown-label`
//
// ========================================================================


// Variables
// ========================================================================

@countdown-item-line-height:                    70px;

@countdown-number-font-size:                    2rem; // 32px
@countdown-number-font-size-s:                  4rem; // 64px
@countdown-number-font-size-m:                  6rem; // 96px

@countdown-separator-font-size:                 1rem; // 16px
@countdown-separator-font-size-s:               2rem; // 32px
@countdown-separator-font-size-m:               3rem; // 48px


/* ========================================================================
   Component: Countdown
 ========================================================================== */

.uk-countdown {
    .hook-countdown;
}


/* Item
 ========================================================================== */

/*
 * 1. Center numbers and separators vertically
 */

.uk-countdown-number,
.uk-countdown-separator {
    /* 1 */
    line-height: @countdown-item-line-height;
    .hook-countdown-item;
}


/* Number
 ========================================================================== */

.uk-countdown-number {
    font-size: @countdown-number-font-size;
    .hook-countdown-number;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-countdown-number { font-size: @countdown-number-font-size-s; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-countdown-number { font-size: @countdown-number-font-size-m; }

}


/* Separator
 ========================================================================== */

.uk-countdown-separator {
    font-size: @countdown-separator-font-size;
    .hook-countdown-separator;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-countdown-separator { font-size: @countdown-separator-font-size-s; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-countdown-separator { font-size: @countdown-separator-font-size-m; }

}


/* Label
 ========================================================================== */

.uk-countdown-label {
    .hook-countdown-label;
}


// Hooks
// ========================================================================

.hook-countdown-misc;

.hook-countdown() {}
.hook-countdown-item() {}
.hook-countdown-number() {}
.hook-countdown-separator() {}
.hook-countdown-label() {}
.hook-countdown-misc() {}


// Inverse
// ========================================================================

.hook-inverse() {

    .uk-countdown-number,
    .uk-countdown-separator {
        .hook-inverse-countdown-item;
    }

    .uk-countdown-number {
        .hook-inverse-countdown-number;
    }

    .uk-countdown-separator {
        .hook-inverse-countdown-separator;
    }

    .uk-countdown-label {
        .hook-inverse-countdown-label;
    }

}

.hook-inverse-countdown-item() {}
.hook-inverse-countdown-number() {}
.hook-inverse-countdown-separator() {}
.hook-inverse-countdown-label() {}

// Name:            Animation
// Description:     Utilities for keyframe animations
//
// Component:       `uk-animation-*`
//
// Modifiers:       `uk-animation-reverse`
//                  `uk-animation-fast`
//                  `uk-animation-fade`
//                  `uk-animation-scale-up`
//                  `uk-animation-scale-down`
//                  `uk-animation-slide-top-*`
//                  `uk-animation-slide-bottom-*`
//                  `uk-animation-slide-left-*`
//                  `uk-animation-slide-right-*`
//                  `uk-animation-kenburns`
//                  `uk-animation-shake`
//
// Sub-objects:     `uk-animation-toggle`
//
// States:          `uk-hover`
//
// ========================================================================


// Variables
// ========================================================================

@animation-duration:                            0.5s;
@animation-fade-duration:                       0.8s;
@animation-kenburns-duration:                   15s;
@animation-fast-duration:                       0.1s;

@animation-slide-small-translate:               10px;
@animation-slide-medium-translate:              50px;


/* ========================================================================
   Component: Animation
 ========================================================================== */

[class*='uk-animation-'] {
    animation-duration: @animation-duration;
    animation-timing-function: ease-out;
    animation-fill-mode: both;
}


/* Direction modifier
 ========================================================================== */

.uk-animation-reverse {
    animation-direction: reverse;
    animation-timing-function: ease-in;
}


/* Animations for scrollspy
 ========================================================================== */

/*
 * Fade
 */

.uk-animation-fade {
    animation-name: uk-fade;
    animation-duration: @animation-fade-duration;
    animation-timing-function: linear;
}

/*
 * Scale
 */

.uk-animation-scale-up { animation-name: uk-fade-scale-02; }
.uk-animation-scale-down { animation-name: uk-fade-scale-18; }

/*
 * Slide
 */

.uk-animation-slide-top { animation-name: uk-fade-top; }
.uk-animation-slide-bottom { animation-name: uk-fade-bottom; }
.uk-animation-slide-left { animation-name: uk-fade-left; }
.uk-animation-slide-right { animation-name: uk-fade-right; }

/*
 * Slide Small
 */

.uk-animation-slide-top-small { animation-name: uk-fade-top-small; }
.uk-animation-slide-bottom-small { animation-name: uk-fade-bottom-small; }
.uk-animation-slide-left-small { animation-name: uk-fade-left-small; }
.uk-animation-slide-right-small { animation-name: uk-fade-right-small; }

/*
 * Slide Medium
 */

.uk-animation-slide-top-medium { animation-name: uk-fade-top-medium; }
.uk-animation-slide-bottom-medium { animation-name: uk-fade-bottom-medium; }
.uk-animation-slide-left-medium { animation-name: uk-fade-left-medium; }
.uk-animation-slide-right-medium { animation-name: uk-fade-right-medium; }

/*
 * Kenburns
 */

.uk-animation-kenburns {
    animation-name: uk-scale-kenburns;
    animation-duration: @animation-kenburns-duration;
}

/*
 * Shake
 */

.uk-animation-shake { animation-name: uk-shake; }


/* Duration modifier
 ========================================================================== */

.uk-animation-fast { animation-duration: @animation-fast-duration; }


/* Enable animation only on hover
========================================================================== */

/*
 * Note: Firefox and IE needs this because animations are not triggered when switching between display `none` and `block`
 */

.uk-animation-toggle:not(:hover):not(.uk-hover) [class*='uk-animation-'] { animation-name: none; }


/* Keyframes used by animation classes
 ========================================================================== */

/*
 * Fade
 */

@keyframes uk-fade {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/*
 * Slide Top
 */

@keyframes uk-fade-top {
    0% {
        opacity: 0;
        transform: translateY(-100%);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Bottom
 */

@keyframes uk-fade-bottom {
    0% {
        opacity: 0;
        transform: translateY(100%);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Left
 */

@keyframes uk-fade-left {
    0% {
        opacity: 0;
        transform: translateX(-100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Slide Right
 */

@keyframes uk-fade-right {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Slide Top Small
 */

@keyframes uk-fade-top-small {
    0% {
        opacity: 0;
        transform: translateY(-@animation-slide-small-translate);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Bottom Small
 */

@keyframes uk-fade-bottom-small {
    0% {
        opacity: 0;
        transform: translateY(@animation-slide-small-translate);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Left Small
 */

@keyframes uk-fade-left-small {
    0% {
        opacity: 0;
        transform: translateX(-@animation-slide-small-translate);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Slide Right Small
 */

@keyframes uk-fade-right-small {
    0% {
        opacity: 0;
        transform: translateX(@animation-slide-small-translate);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Slide Top Medium
 */

@keyframes uk-fade-top-medium {
    0% {
        opacity: 0;
        transform: translateY(-@animation-slide-medium-translate);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Bottom Medium
 */

@keyframes uk-fade-bottom-medium {
    0% {
        opacity: 0;
        transform: translateY(@animation-slide-medium-translate);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/*
 * Slide Left Medium
 */

@keyframes uk-fade-left-medium {
    0% {
        opacity: 0;
        transform: translateX(-@animation-slide-medium-translate);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Slide Right Medium
 */

@keyframes uk-fade-right-medium {
    0% {
        opacity: 0;
        transform: translateX(@animation-slide-medium-translate);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/*
 * Scale Up
 */

@keyframes uk-fade-scale-02 {
    0% {
        opacity: 0;
        transform: scale(0.2);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/*
 * Scale Down
 */

@keyframes uk-fade-scale-18 {
    0% {
        opacity: 0;
        transform: scale(1.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/*
 * Kenburns
 */

@keyframes uk-scale-kenburns {
    0% { transform: scale(1); }
    100% { transform: scale(1.2); }
}

/*
 * Shake
 */

@keyframes uk-shake {
    0%, 100% { transform: translateX(0); }
    10% { transform: translateX(-9px); }
    20% { transform: translateX(8px); }
    30% { transform: translateX(-7px); }
    40% { transform: translateX(6px); }
    50% { transform: translateX(-5px); }
    60% { transform: translateX(4px); }
    70% { transform: translateX(-3px); }
    80% { transform: translateX(2px); }
    90% { transform: translateX(-1px); }
}


// Hooks
// ========================================================================

.hook-animation-misc;

.hook-animation-misc() {}

// Name:            Width
// Description:     Utilities for widths
//
// Component:       `uk-child-width-*`
//                  `uk-width-*`
//
//
// ========================================================================


// Variables
// ========================================================================

@width-small-width:                             150px;
@width-medium-width:                            300px;
@width-large-width:                             450px;
@width-xlarge-width:                            600px;
@width-xxlarge-width:                           750px;


/* ========================================================================
   Component: Width
 ========================================================================== */


/* Equal child widths
 ========================================================================== */

[class*='uk-child-width'] > * {
    box-sizing: border-box;
    width: 100%;
}

.uk-child-width-1-2 > * { width: 50%; }
.uk-child-width-1-3 > * { width: ~'calc(100% * 1 / 3.001)'; }
.uk-child-width-1-4 > * { width: 25%; }
.uk-child-width-1-5 > * { width: 20%; }
.uk-child-width-1-6 > * { width: ~'calc(100% * 1 / 6.001)'; }

.uk-child-width-auto > * { width: auto; }

/*
 *    Instead of 0, 1px is needed to make cell wrap into next row if predecessor is 100% wide
 *    and the grid gutter is 0 pixels wide
 */

.uk-child-width-expand > * { width: 1px; }

/*
 * 1. Make `width: 1px` work, because according to the spec flex items won’t shrink
 *    below their minimum content size. To change this, set the min-width.
 *    Only needed for Firefox. All other browsers ignore this.
 *
 * 2. `width` is ignored when wrapping flex items in Safari
 *    https://github.com/philipwalton/flexbugs#11-min-and-max-size-declarations-are-ignored-when-wrapping-flex-items
 */

.uk-child-width-expand > :not([class*='uk-width']) {
    flex: 1;
    /* 1 */
    min-width: 0;
    /* 2 */
    flex-basis: 1px;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-child-width-1-1\@s > * { width: 100%; }
    .uk-child-width-1-2\@s > * { width: 50%; }
    .uk-child-width-1-3\@s > * { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-child-width-1-4\@s > * { width: 25%; }
    .uk-child-width-1-5\@s > * { width: 20%; }
    .uk-child-width-1-6\@s > * { width: ~'calc(100% * 1 / 6.001)'; }

    .uk-child-width-auto\@s > * { width: auto; }
    .uk-child-width-expand\@s > * { width: 1px; }

    .uk-child-width-expand\@s > :not([class*='uk-width']) {
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-child-width-1-1\@m > * { width: 100%; }
    .uk-child-width-1-2\@m > * { width: 50%; }
    .uk-child-width-1-3\@m > * { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-child-width-1-4\@m > * { width: 25%; }
    .uk-child-width-1-5\@m > * { width: 20%; }
    .uk-child-width-1-6\@m > * { width: ~'calc(100% * 1 / 6.001)'; }

    .uk-child-width-auto\@m > * { width: auto; }
    .uk-child-width-expand\@m > * { width: 1px; }

    .uk-child-width-expand\@m > :not([class*='uk-width']) {
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-child-width-1-1\@l > * { width: 100%; }
    .uk-child-width-1-2\@l > * { width: 50%; }
    .uk-child-width-1-3\@l > * { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-child-width-1-4\@l > * { width: 25%; }
    .uk-child-width-1-5\@l > * { width: 20%; }
    .uk-child-width-1-6\@l > * { width: ~'calc(100% * 1 / 6.001)'; }

    .uk-child-width-auto\@l > * { width: auto; }
    .uk-child-width-expand\@l > * { width: 1px; }

    .uk-child-width-expand\@l > :not([class*='uk-width']) {
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-child-width-1-1\@xl > * { width: 100%; }
    .uk-child-width-1-2\@xl > * { width: 50%; }
    .uk-child-width-1-3\@xl > * { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-child-width-1-4\@xl > * { width: 25%; }
    .uk-child-width-1-5\@xl > * { width: 20%; }
    .uk-child-width-1-6\@xl > * { width: ~'calc(100% * 1 / 6.001)'; }

    .uk-child-width-auto\@xl > * { width: auto; }
    .uk-child-width-expand\@xl > * { width: 1px; }

    .uk-child-width-expand\@xl > :not([class*='uk-width']) {
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}


/* Single Widths
 ========================================================================== */

/*
 * 1. `max-width` is needed for the pixel-based classes
 */

[class*='uk-width'] {
    box-sizing: border-box;
    width: 100%;
    /* 1 */
    max-width: 100%;
}

/* Halves */
.uk-width-1-2 { width: 50%; }

/* Thirds */
.uk-width-1-3 { width: ~'calc(100% * 1 / 3.001)'; }
.uk-width-2-3 { width: ~'calc(100% * 2 / 3.001)'; }

/* Quarters */
.uk-width-1-4 { width: 25%; }
.uk-width-3-4 { width: 75%; }

/* Fifths */
.uk-width-1-5 { width: 20%; }
.uk-width-2-5 { width: 40%; }
.uk-width-3-5 { width: 60%; }
.uk-width-4-5 { width: 80%; }

/* Sixths */
.uk-width-1-6 { width: ~'calc(100% * 1 / 6.001)'; }
.uk-width-5-6 { width: ~'calc(100% * 5 / 6.001)'; }

/* Pixel */
.uk-width-small { width: @width-small-width; }
.uk-width-medium { width: @width-medium-width; }
.uk-width-large { width: @width-large-width; }
.uk-width-xlarge { width: @width-xlarge-width; }
.uk-width-xxlarge { width: @width-xxlarge-width; }

/* Auto */
.uk-width-auto { width: auto; }

/* Expand */
.uk-width-expand {
    width: 1px;
    flex: 1;
    min-width: 0;
    flex-basis: 1px;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    /* Whole */
    .uk-width-1-1\@s { width: 100%; }

    /* Halves */
    .uk-width-1-2\@s { width: 50%; }

    /* Thirds */
    .uk-width-1-3\@s { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-width-2-3\@s { width: ~'calc(100% * 2 / 3.001)'; }

    /* Quarters */
    .uk-width-1-4\@s { width: 25%; }
    .uk-width-3-4\@s { width: 75%; }

    /* Fifths */
    .uk-width-1-5\@s { width: 20%; }
    .uk-width-2-5\@s { width: 40%; }
    .uk-width-3-5\@s { width: 60%; }
    .uk-width-4-5\@s { width: 80%; }

    /* Sixths */
    .uk-width-1-6\@s { width: ~'calc(100% * 1 / 6.001)'; }
    .uk-width-5-6\@s { width: ~'calc(100% * 5 / 6.001)'; }

    /* Pixel */
    .uk-width-small\@s { width: @width-small-width; }
    .uk-width-medium\@s { width: @width-medium-width; }
    .uk-width-large\@s { width: @width-large-width; }
    .uk-width-xlarge\@s { width: @width-xlarge-width; }
    .uk-width-xxlarge\@s { width: @width-xxlarge-width; }

    /* Auto */
    .uk-width-auto\@s { width: auto; }

    /* Expand */
    .uk-width-expand\@s {
        width: 1px;
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    /* Whole */
    .uk-width-1-1\@m { width: 100%; }

    /* Halves */
    .uk-width-1-2\@m { width: 50%; }

    /* Thirds */
    .uk-width-1-3\@m { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-width-2-3\@m { width: ~'calc(100% * 2 / 3.001)'; }

    /* Quarters */
    .uk-width-1-4\@m { width: 25%; }
    .uk-width-3-4\@m { width: 75%; }

    /* Fifths */
    .uk-width-1-5\@m { width: 20%; }
    .uk-width-2-5\@m { width: 40%; }
    .uk-width-3-5\@m { width: 60%; }
    .uk-width-4-5\@m { width: 80%; }

    /* Sixths */
    .uk-width-1-6\@m { width: ~'calc(100% * 1 / 6.001)'; }
    .uk-width-5-6\@m { width: ~'calc(100% * 5 / 6.001)'; }

    /* Pixel */
    .uk-width-small\@m { width: @width-small-width; }
    .uk-width-medium\@m { width: @width-medium-width; }
    .uk-width-large\@m { width: @width-large-width; }
    .uk-width-xlarge\@m { width: @width-xlarge-width; }
    .uk-width-xxlarge\@m { width: @width-xxlarge-width; }

     /* Auto */
    .uk-width-auto\@m { width: auto; }

    /* Expand */
    .uk-width-expand\@m {
        width: 1px;
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    /* Whole */
    .uk-width-1-1\@l { width: 100%; }

    /* Halves */
    .uk-width-1-2\@l { width: 50%; }

    /* Thirds */
    .uk-width-1-3\@l { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-width-2-3\@l { width: ~'calc(100% * 2 / 3.001)'; }

    /* Quarters */
    .uk-width-1-4\@l { width: 25%; }
    .uk-width-3-4\@l { width: 75%; }

    /* Fifths */
    .uk-width-1-5\@l { width: 20%; }
    .uk-width-2-5\@l { width: 40%; }
    .uk-width-3-5\@l { width: 60%; }
    .uk-width-4-5\@l { width: 80%; }

    /* Sixths */
    .uk-width-1-6\@l { width: ~'calc(100% * 1 / 6.001)'; }
    .uk-width-5-6\@l { width: ~'calc(100% * 5 / 6.001)'; }

    /* Pixel */
    .uk-width-small\@l { width: @width-small-width; }
    .uk-width-medium\@l { width: @width-medium-width; }
    .uk-width-large\@l { width: @width-large-width; }
    .uk-width-xlarge\@l { width: @width-xlarge-width; }
    .uk-width-xxlarge\@l { width: @width-xxlarge-width; }

    /* Auto */
    .uk-width-auto\@l { width: auto; }

    /* Expand */
    .uk-width-expand\@l {
        width: 1px;
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    /* Whole */
    .uk-width-1-1\@xl { width: 100%; }

    /* Halves */
    .uk-width-1-2\@xl { width: 50%; }

    /* Thirds */
    .uk-width-1-3\@xl { width: ~'calc(100% * 1 / 3.001)'; }
    .uk-width-2-3\@xl { width: ~'calc(100% * 2 / 3.001)'; }

    /* Quarters */
    .uk-width-1-4\@xl { width: 25%; }
    .uk-width-3-4\@xl { width: 75%; }

    /* Fifths */
    .uk-width-1-5\@xl { width: 20%; }
    .uk-width-2-5\@xl { width: 40%; }
    .uk-width-3-5\@xl { width: 60%; }
    .uk-width-4-5\@xl { width: 80%; }

    /* Sixths */
    .uk-width-1-6\@xl { width: ~'calc(100% * 1 / 6.001)'; }
    .uk-width-5-6\@xl { width: ~'calc(100% * 5 / 6.001)'; }

    /* Pixel */
    .uk-width-small\@xl { width: @width-small-width; }
    .uk-width-medium\@xl { width: @width-medium-width; }
    .uk-width-large\@xl { width: @width-large-width; }
    .uk-width-xlarge\@xl { width: @width-xlarge-width; }
    .uk-width-xxlarge\@xl { width: @width-xxlarge-width; }

    /* Auto */
    .uk-width-auto\@xl { width: auto; }

    /* Expand */
    .uk-width-expand\@xl {
        width: 1px;
        flex: 1;
        min-width: 0;
        flex-basis: 1px;
    }

}


// Hooks
// ========================================================================

.hook-width-misc;

.hook-width-misc() {}

// Name:            Text
// Description:     Utilities for text
//
// Component:       `uk-text-*`
//
// ========================================================================


// Variables
// ========================================================================

@text-lead-font-size:                           @global-large-font-size;
@text-lead-line-height:                         1.5;
@text-lead-color:                               @global-emphasis-color;

@text-meta-font-size:                           @global-small-font-size;
@text-meta-line-height:                         1.4;
@text-meta-color:                               @global-muted-color;

@text-small-font-size:                          @global-small-font-size;
@text-small-line-height:                        1.5;

@text-large-font-size:                          @global-large-font-size;
@text-large-line-height:                        1.5;

@text-muted-color:                              @global-muted-color;
@text-primary-color:                            @global-primary-background;
@text-success-color:                            @global-success-background;
@text-warning-color:                            @global-warning-background;
@text-danger-color:                             @global-danger-background;

@text-background-color:                         @global-primary-background;


/* ========================================================================
   Component: Text
 ========================================================================== */


/* Style modifiers
 ========================================================================== */

.uk-text-lead {
    font-size: @text-lead-font-size;
    line-height: @text-lead-line-height;
    color: @text-lead-color;
    .hook-text-lead;
}

.uk-text-meta {
    font-size: @text-meta-font-size;
    line-height: @text-meta-line-height;
    color: @text-meta-color;
    .hook-text-meta;
}


/* Size modifiers
 ========================================================================== */

.uk-text-small {
    font-size: @text-small-font-size;
    line-height: @text-small-line-height;
    .hook-text-small;
}

.uk-text-large {
    font-size: @text-large-font-size;
    line-height: @text-large-line-height;
    .hook-text-large;
}


/* Weight modifier
 ========================================================================== */

.uk-text-bold { font-weight: bolder; }


/* Transform modifier
 ========================================================================== */

.uk-text-uppercase { text-transform: uppercase !important; }
.uk-text-capitalize { text-transform: capitalize !important; }
.uk-text-lowercase { text-transform: lowercase !important; }


/* Color modifiers
 ========================================================================== */

.uk-text-muted { color: @text-muted-color !important; }
.uk-text-primary { color: @text-primary-color !important; }
.uk-text-success { color: @text-success-color !important; }
.uk-text-warning { color: @text-warning-color !important; }
.uk-text-danger { color: @text-danger-color !important; }


/* Background modifier
 ========================================================================== */

/*
 * 1. The background clips to the foreground text. Works in Chrome, Firefox, Safari, Edge and Opera
 *    Default color is set to transparent
 * 2. Container fits the text
 * 3. Fallback color for IE11
 */

.uk-text-background {
    /* 1 */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    /* 2 */
    display: inline-block;
    /* 3 */
    color: @text-background-color !important;
}

@supports (-webkit-background-clip: text) {

    .uk-text-background {
        background-color: @text-background-color;
        .hook-text-background;
    }

}


/* Alignment modifiers
 ========================================================================== */

.uk-text-left { text-align: left !important; }
.uk-text-right { text-align: right !important; }
.uk-text-center { text-align: center !important; }
.uk-text-justify { text-align: justify !important; }

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-text-left\@s { text-align: left !important; }
    .uk-text-right\@s { text-align: right !important; }
    .uk-text-center\@s { text-align: center !important; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-text-left\@m { text-align: left !important; }
    .uk-text-right\@m { text-align: right !important; }
    .uk-text-center\@m { text-align: center !important; }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-text-left\@l { text-align: left !important; }
    .uk-text-right\@l { text-align: right !important; }
    .uk-text-center\@l { text-align: center !important; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-text-left\@xl { text-align: left !important; }
    .uk-text-right\@xl { text-align: right !important; }
    .uk-text-center\@xl { text-align: center !important; }

}

/*
 * Vertical
 */

.uk-text-top { vertical-align: top !important; }
.uk-text-middle { vertical-align: middle !important; }
.uk-text-bottom { vertical-align: bottom !important; }
.uk-text-baseline { vertical-align: baseline !important; }


/* Wrap modifiers
 ========================================================================== */

/*
 * Prevent text from wrapping onto multiple lines
 */

.uk-text-nowrap { white-space: nowrap; }

/*
 * 1. Make sure a max-width is set after which truncation can occur
 * 2. Prevent text from wrapping onto multiple lines, and truncate with an ellipsis
 * 3. Fix for table cells
 */

.uk-text-truncate {
    /* 1 */
    max-width: 100%;
    /* 2 */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* 2 */
th.uk-text-truncate,
td.uk-text-truncate { max-width: 0; }


/*
 * 1. Wrap long words onto the next line and break them if they are too long to fit
 * 2. Legacy `word-wrap` as fallback for `overflow-wrap`
 * 3. Add a hyphen where the word breaks
 * 4. Fix `overflow-wrap` which doesn't work with table cells in Chrome, Opera, IE11 and Edge
 *    Must use `break-all` to support IE11 and Edge
 */

.uk-text-break {
    /* 1 */
    overflow-wrap: break-word;
    /* 2 */
    word-wrap: break-word;
    /* 3 */
    -ms-hyphens: auto;
    -webkit-hyphens: auto;
    hyphens: auto;
}

/* 4 */
th.uk-text-break,
td.uk-text-break { word-break: break-all; }



// Hooks
// ========================================================================

.hook-text-misc;

.hook-text-lead() {}
.hook-text-meta() {}
.hook-text-small() {}
.hook-text-large() {}
.hook-text-background() {}
.hook-text-misc() {}


// Inverse
// ========================================================================

@inverse-text-lead-color:                      @inverse-global-color;
@inverse-text-meta-color:                      @inverse-global-muted-color;
@inverse-text-muted-color:                     @inverse-global-muted-color;
@inverse-text-primary-color:                   @inverse-global-color;

.hook-inverse() {

    .uk-text-lead {
        color: @inverse-text-lead-color;
        .hook-inverse-text-lead;
    }

    .uk-text-meta {
        color: @inverse-text-meta-color;
        .hook-inverse-text-meta;
    }

    .uk-text-muted { color: @inverse-text-muted-color !important; }
    .uk-text-primary { color: @inverse-text-primary-color !important; }

}

.hook-inverse-text-lead() {}
.hook-inverse-text-meta() {}

// Name:            Column
// Description:     Utilities for text columns
//
// Component:       `uk-column-*`
//
// Sub-objects:     `uk-column-span`
//
// Modifiers:       `uk-column-divider`
//
// ========================================================================


// Variables
// ========================================================================

@column-gutter:                                 @global-gutter;
@column-gutter-l:                               @global-medium-gutter;

@column-divider-rule-color:                     @global-border;
@column-divider-rule-width:                     1px;


/* ========================================================================
   Component: Column
 ========================================================================== */

[class*='uk-column-'] { column-gap: @column-gutter; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    [class*='uk-column-'] { column-gap: @column-gutter-l; }

}

/*
 * Fix image 1px line wrapping into the next column in Chrome
 */

[class*='uk-column-'] img { transform: translate3d(0,0,0); }


/* Divider
 ========================================================================== */

/*
 * 1. Double the column gap
 */

.uk-column-divider {
    column-rule: @column-divider-rule-width solid @column-divider-rule-color;
    /* 1 */
    column-gap: (@column-gutter * 2);
}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-column-divider {
        column-gap: (@column-gutter-l * 2);
    }

}


/* Width modifiers
 ========================================================================== */

.uk-column-1-2 { column-count: 2;}
.uk-column-1-3 { column-count: 3; }
.uk-column-1-4 { column-count: 4; }
.uk-column-1-5 { column-count: 5; }
.uk-column-1-6 { column-count: 6; }

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-column-1-2\@s { column-count: 2; }
    .uk-column-1-3\@s { column-count: 3; }
    .uk-column-1-4\@s { column-count: 4; }
    .uk-column-1-5\@s { column-count: 5; }
    .uk-column-1-6\@s { column-count: 6; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-column-1-2\@m { column-count: 2; }
    .uk-column-1-3\@m { column-count: 3; }
    .uk-column-1-4\@m { column-count: 4; }
    .uk-column-1-5\@m { column-count: 5; }
    .uk-column-1-6\@m { column-count: 6; }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-column-1-2\@l { column-count: 2; }
    .uk-column-1-3\@l { column-count: 3; }
    .uk-column-1-4\@l { column-count: 4; }
    .uk-column-1-5\@l { column-count: 5; }
    .uk-column-1-6\@l { column-count: 6; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-column-1-2\@xl { column-count: 2; }
    .uk-column-1-3\@xl { column-count: 3; }
    .uk-column-1-4\@xl { column-count: 4; }
    .uk-column-1-5\@xl { column-count: 5; }
    .uk-column-1-6\@xl { column-count: 6; }

}

/* Make element span across all columns
 * Does not work in Firefox yet
 ========================================================================== */

.uk-column-span { column-span: all; }


// Hooks
// ========================================================================

.hook-column-misc;

.hook-column-misc() {}


// Inverse
// ========================================================================

@inverse-column-divider-rule-color:                    @inverse-global-border;

.hook-inverse() {

    .uk-column-divider { column-rule-color: @inverse-column-divider-rule-color; }

}
// Name:            Cover
// Description:     Utilities to let embedded content cover their container in a centered position
//
// Component:       `uk-cover`
//
// Sub-object:      `uk-cover-container`
//
// ========================================================================


/* ========================================================================
   Component: Cover
 ========================================================================== */

/*
 * Works with iframes and embedded content
 * 1. Reset responsiveness for embedded content
 * 2. Center object
 * Note: Percent values on the `top` property only works if this element
 *       is absolute positioned or if the container has a height
 */

.uk-cover {
    /* 1 */
    max-width: none;
    /* 2 */
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}

iframe.uk-cover { pointer-events: none; }


/* Container
 ========================================================================== */

/*
 * 1. Parent container which clips resized object
 * 2. Needed if the child is positioned absolute. See note above
 */

.uk-cover-container {
    /* 1 */
    overflow: hidden;
    /* 2 */
    position: relative;
}


// Hooks
// ========================================================================

.hook-cover-misc;

.hook-cover-misc() {}
// Name:            Background
// Description:     Utilities for backgrounds
//
// Component:       `uk-background-*`
//
// ========================================================================


// Variables
// ========================================================================

@background-default-background:                 @global-background;
@background-muted-background:                   @global-muted-background;
@background-primary-background:                 @global-primary-background;
@background-secondary-background:               @global-secondary-background;


/* ========================================================================
   Component: Background
 ========================================================================== */


/* Color
 ========================================================================== */

.uk-background-default { background-color: @background-default-background; }
.uk-background-muted { background-color: @background-muted-background; }
.uk-background-primary { background-color: @background-primary-background; }
.uk-background-secondary { background-color: @background-secondary-background; }


/* Size
 ========================================================================== */

.uk-background-cover,
.uk-background-contain {
    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.uk-background-cover { background-size: cover; }
.uk-background-contain { background-size: contain; }


/* Position
 ========================================================================== */

.uk-background-top-left { background-position: 0 0; }
.uk-background-top-center { background-position: 50% 0; }
.uk-background-top-right { background-position: 100% 0; }
.uk-background-center-left { background-position: 0 50%; }
.uk-background-center-center { background-position: 50% 50%; }
.uk-background-center-right { background-position: 100% 50%; }
.uk-background-bottom-left { background-position: 0 100%; }
.uk-background-bottom-center { background-position: 50% 100%; }
.uk-background-bottom-right { background-position: 100% 100%; }


/* Repeat
 ========================================================================== */

.uk-background-norepeat { background-repeat: no-repeat; }


/* Attachment
 ========================================================================== */

.uk-background-fixed { background-attachment: fixed; }

/*
 * Exclude touch devices because `fixed` doesn't work on iOS and Android
 */

@media (pointer: coarse) {
    .uk-background-fixed { background-attachment: scroll; }
}


/* Image
 ========================================================================== */

/* Phone portrait and smaller */
@media (max-width: @breakpoint-xsmall-max) {

    .uk-background-image\@s { background-image: none !important; }

}

/* Phone landscape and smaller */
@media (max-width: @breakpoint-small-max) {

    .uk-background-image\@m { background-image: none !important; }

}

/* Tablet landscape and smaller */
@media (max-width: @breakpoint-medium-max) {

    .uk-background-image\@l { background-image: none !important; }

}

/* Desktop and smaller */
@media (max-width: @breakpoint-large-max) {

    .uk-background-image\@xl {background-image: none !important; }

}


/* Blend modes
 ========================================================================== */

.uk-background-blend-multiply { background-blend-mode: multiply; }
.uk-background-blend-screen { background-blend-mode: screen; }
.uk-background-blend-overlay { background-blend-mode: overlay; }
.uk-background-blend-darken { background-blend-mode: darken; }
.uk-background-blend-lighten { background-blend-mode: lighten; }
.uk-background-blend-color-dodge { background-blend-mode: color-dodge; }
.uk-background-blend-color-burn { background-blend-mode: color-burn; }
.uk-background-blend-hard-light { background-blend-mode: hard-light; }
.uk-background-blend-soft-light { background-blend-mode: soft-light; }
.uk-background-blend-difference { background-blend-mode: difference; }
.uk-background-blend-exclusion { background-blend-mode: exclusion; }
.uk-background-blend-hue { background-blend-mode: hue; }
.uk-background-blend-saturation { background-blend-mode: saturation; }
.uk-background-blend-color { background-blend-mode: color; }
.uk-background-blend-luminosity { background-blend-mode: luminosity; }


// Hooks
// ========================================================================

.hook-background-misc;

.hook-background-misc() {}

// Name:            Align
// Description:     Utilities to align embedded content
//
// Component:       `uk-align-left-*`
//                  `uk-align-right-*`
//                  `uk-align-center`
//
// ========================================================================


// Variables
// ========================================================================

@align-margin-horizontal:                       @global-gutter;
@align-margin-vertical:                         @global-gutter;

@align-margin-horizontal-l:                     @global-medium-gutter;


/* ========================================================================
   Component: Align
 ========================================================================== */

/*
 * Default
 */

[class*='uk-align'] {
    display: block;
    margin-bottom: @align-margin-vertical;
}

* + [class*='uk-align'] { margin-top: @align-margin-vertical; }

/*
 * Center
 */

.uk-align-center {
    margin-left: auto;
    margin-right: auto;
}

/*
 * Left/Right
 */

.uk-align-left {
    margin-top: 0;
    margin-right: @align-margin-horizontal;
    float: left;
}

.uk-align-right {
    margin-top: 0;
    margin-left: @align-margin-horizontal;
    float: right;
}

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-align-left\@s {
        margin-top: 0;
        margin-right: @align-margin-horizontal;
        float: left;
    }

    .uk-align-right\@s {
        margin-top: 0;
        margin-left: @align-margin-horizontal;
        float: right;
    }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-align-left\@m {
        margin-top: 0;
        margin-right: @align-margin-horizontal;
        float: left;
    }

    .uk-align-right\@m {
        margin-top: 0;
        margin-left: @align-margin-horizontal;
        float: right;
    }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-align-left\@l {
        margin-top: 0;
        float: left;
    }

    .uk-align-right\@l {
        margin-top: 0;
        float: right;
    }

    .uk-align-left,
    .uk-align-left\@s,
    .uk-align-left\@m,
    .uk-align-left\@l { margin-right: @align-margin-horizontal-l; }

    .uk-align-right,
    .uk-align-right\@s,
    .uk-align-right\@m,
    .uk-align-right\@l { margin-left: @align-margin-horizontal-l; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-align-left\@xl {
        margin-top: 0;
        margin-right: @align-margin-horizontal-l;
        float: left;
    }

    .uk-align-right\@xl {
        margin-top: 0;
        margin-left: @align-margin-horizontal-l;
        float: right;
    }

}


// Hooks
// ========================================================================

.hook-align-misc;

.hook-align-misc() {}
// Name:            Utility
// Description:     Utilities collection
//
// Component:       `uk-panel-*`
//                  `uk-clearfix`
//                  `uk-float-*`
//                  `uk-overflow-*`
//                  `uk-resize-*`
//                  `uk-display-*`
//                  `uk-inline-*`
//                  `uk-height-*`
//                  `uk-responsive-*`
//                  `uk-preserve-width`
//                  `uk-border-*`
//                  `uk-box-shadow-*`
//                  `uk-box-shadow-bottom`
//                  `uk-dropcap`
//                  `uk-leader`
//                  `uk-logo`
//                  `uk-svg`
//                  `uk-blend-*`
//                  `uk-transform-*`
//                  `uk-transform-origin-*`
//
// States:          `uk-disabled`
//                  `uk-drag`
//                  `uk-dragover`
//                  `uk-preserve`
//
// ========================================================================


// Variables
// ========================================================================

@panel-scrollable-height:                       170px;
@panel-scrollable-padding:                      10px;
@panel-scrollable-border-width:                 @global-border-width;
@panel-scrollable-border:                       @global-border;

@height-small-height:                           150px;
@height-medium-height:                          300px;
@height-large-height:                           450px;

@border-rounded-border-radius:                  5px;

@box-shadow-duration:                           0.1s;

@box-shadow-bottom-height:                      30px;
@box-shadow-bottom-border-radius:               100%;
@box-shadow-bottom-background:                  #444;
@box-shadow-bottom-blur:                        20px;

@dropcap-margin-right:                          10px;
@dropcap-font-size:                             ((@global-line-height * 3) * 1em);

@leader-fill-content:                           '.';
@leader-fill-margin-left:                       @global-small-gutter;

@logo-font-size:                                @global-large-font-size;
@logo-font-family:                              @global-font-family;
@logo-color:                                    @global-color;
@logo-hover-color:                              @global-color;

@dragover-box-shadow:                           0 0 20px rgba(100,100,100,0.3);


/* ========================================================================
   Component: Utility
 ========================================================================== */


/* Panel
 ========================================================================== */

.uk-panel {
    position: relative;
    box-sizing: border-box;
}

/*
 * Micro clearfix
 */

.uk-panel::before,
.uk-panel::after {
    content: "";
    display: table;
}

.uk-panel::after { clear: both; }

/*
 * Remove margin from the last-child
 */

.uk-panel > :last-child { margin-bottom: 0; }


/*
 * Scrollable
 */

.uk-panel-scrollable {
    height: @panel-scrollable-height;
    padding: @panel-scrollable-padding;
    border: @panel-scrollable-border-width solid @panel-scrollable-border;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    resize: both;
    .hook-panel-scrollable;
}


/* Clearfix
 ========================================================================== */

/*
 * 1. `table-cell` is used with `::before` because `table` creates a 1px gap when it becomes a flex item, only in Webkit
 * 2. `table` is used again with `::after` because `clear` only works with block elements.
 * Note: `display: block` with `overflow: hidden` is currently not working in the latest Safari
 */

/* 1 */
.uk-clearfix::before {
    content: "";
    display: table-cell;
}

/* 2 */
.uk-clearfix::after {
    content: "";
    display: table;
    clear: both;
}


/* Float
 ========================================================================== */

/*
 * 1. Prevent content overflow
 */

.uk-float-left { float: left; }
.uk-float-right { float: right; }

/* 1 */
[class*='uk-float-'] { max-width: 100%; }


/* Overfow
 ========================================================================== */

.uk-overflow-hidden { overflow: hidden; }

/*
 * Enable scrollbars if content is clipped
 */

.uk-overflow-auto {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

.uk-overflow-auto > :last-child { margin-bottom: 0; }


/* Resize
 ========================================================================== */

.uk-resize { resize: both; }
.uk-resize-vertical { resize: vertical; }


/* Display
 ========================================================================== */

.uk-display-block { display: block !important; }
.uk-display-inline { display: inline !important; }
.uk-display-inline-block { display: inline-block !important; }


/* Inline
 ========================================================================== */

/*
 * 1. Container fits its content
 * 2. Create position context
 * 3. Prevent content overflow
 * 4. Behave like most inline-block elements
 * 5. Force hardware acceleration without creating a new stacking context
 *    to fix 1px glitch when combined with overlays and transitions in Webkit
 * 6. Clip child elements
 */

[class*='uk-inline'] {
    /* 1 */
    display: inline-block;
    /* 2 */
    position: relative;
    /* 3 */
    max-width: 100%;
    /* 4 */
    vertical-align: middle;
    /* 5 */
    -webkit-backface-visibility: hidden;
}

.uk-inline-clip {
    /* 6 */
    overflow: hidden;
}


/* Height
 ========================================================================== */

[class*='uk-height'] { box-sizing: border-box; }

/*
 * Only works if parent element has a height set
 */

.uk-height-1-1 { height: 100%; }

/*
 * Useful to create image teasers
 */

.uk-height-viewport { min-height: 100vh; }

/*
 * Pixel
 * Useful for `overflow: auto`
 */

.uk-height-small { height: @height-small-height; }
.uk-height-medium { height: @height-medium-height; }
.uk-height-large { height: @height-large-height; }

.uk-height-max-small { max-height: @height-small-height; }
.uk-height-max-medium { max-height: @height-medium-height; }
.uk-height-max-large { max-height: @height-large-height; }


/* Responsive objects
 ========================================================================== */

/*
 * Preserve original dimensions
 * Because `img, `video`, `canvas` and  `audio` are already responsive by default, see Base component
 */

.uk-preserve-width,
.uk-preserve-width audio,
.uk-preserve-width canvas,
.uk-preserve-width img,
.uk-preserve-width svg,
.uk-preserve-width video { max-width: none; }

/*
 * Responsiveness
 * Corrects `max-width` and `max-height` behavior if padding and border are used
 */

.uk-responsive-width,
.uk-responsive-height { box-sizing: border-box; }

/*
 * 1. Set a maximum width. `important` needed to override `uk-preserve-width img`
 * 2. Auto scale the height. Only needed if `height` attribute is present
 */

.uk-responsive-width {
    /* 1 */
    max-width: 100% !important;
    /* 2 */
    height: auto;
}

/*
 * 1. Set a maximum height. Only works if the parent element has a fixed height
 * 2. Auto scale the width. Only needed if `width` attribute is present
 * 3. Reset max-width, which `img, `video`, `canvas` and  `audio` already have by default
 */

.uk-responsive-height {
    /* 1 */
    max-height: 100%;
    /* 2 */
    width: auto;
    /* 3 */
    max-width: none;
}


/* Border
 ========================================================================== */

.uk-border-circle { border-radius: 50%; }
.uk-border-rounded { border-radius: @border-rounded-border-radius; }

/*
 * Fix `overflow: hidden` to be ignored with border-radius and CSS transforms in Webkit
 */

.uk-inline-clip[class*='uk-border-'] { -webkit-transform: translateZ(0); }


/* Box-shadow
 ========================================================================== */

.uk-box-shadow-small { box-shadow: @global-small-box-shadow; }
.uk-box-shadow-medium { box-shadow: @global-medium-box-shadow; }
.uk-box-shadow-large { box-shadow: @global-large-box-shadow; }
.uk-box-shadow-xlarge { box-shadow: @global-xlarge-box-shadow; }

/*
 * Hover
 */

[class*='uk-box-shadow-hover'] { transition: box-shadow @box-shadow-duration ease-in-out; }

.uk-box-shadow-hover-small:hover { box-shadow: @global-small-box-shadow; }
.uk-box-shadow-hover-medium:hover { box-shadow: @global-medium-box-shadow; }
.uk-box-shadow-hover-large:hover { box-shadow: @global-large-box-shadow; }
.uk-box-shadow-hover-xlarge:hover { box-shadow: @global-xlarge-box-shadow; }


/* Box-shadow bottom
 ========================================================================== */

/*
 * 1. Set position.
 * 2. Set style
 * 3. Blur doesn't work on pseudo elements with negative `z-index` in Edge.
 *    Solved by using `before` and add position context to child elements.
 */

@supports (filter: blur(0)) {

    .uk-box-shadow-bottom {
        display: inline-block;
        position: relative;
        max-width: 100%;
        vertical-align: middle;
    }

    .uk-box-shadow-bottom::before {
        content: '';
        /* 1 */
        position: absolute;
        bottom: -@box-shadow-bottom-height;
        left: 0;
        right: 0;
        /* 2 */
        height: @box-shadow-bottom-height;
        border-radius: @box-shadow-bottom-border-radius;
        background: @box-shadow-bottom-background;
        filter: blur(@box-shadow-bottom-blur);
        .hook-box-shadow-bottom;
    }

    /* 3 */
    .uk-box-shadow-bottom > * { position: relative; }

}


/* Drop cap
 ========================================================================== */

.uk-dropcap::first-letter,
.uk-dropcap > p:first-of-type::first-letter {
    display: block;
    margin-right: @dropcap-margin-right;
    float: left;
    font-size: @dropcap-font-size;
    line-height: 1;
    .hook-dropcap;
}


/* Leader
 ========================================================================== */

.uk-leader { overflow: hidden; }

/*
 * 1. Place element in text flow
 * 2. Never break into a new line
 * 3. Get a string back with as many repeating characters to fill the container
 * 4. Prevent wrapping. Overflowing characters will be clipped by the container
 */

.uk-leader-fill::after {
    /* 1 */
    display: inline-block;
    margin-left: @leader-fill-margin-left;
    /* 2 */
    width: 0;
    /* 3 */
    content: attr(data-fill);
    /* 4 */
    white-space: nowrap;
    .hook-leader;
}

/*
 * Hide if media does not match
 */

.uk-leader-fill.uk-leader-hide::after { display: none; }

/* Pass fill character to JS */
.var-leader-fill:before { content: @leader-fill-content; }


/* Logo
 ========================================================================== */

/*
 * 1. Required for `a`
 */

.uk-logo {
    font-size: @logo-font-size;
    font-family: @logo-font-family;
    color: @logo-color;
    /* 1 */
    text-decoration: none;
    .hook-logo;
}

/* Hover + Focus */
.uk-logo:hover,
.uk-logo:focus {
    color: @logo-hover-color;
    outline: none;
    /* 1 */
    text-decoration: none;
    .hook-logo-hover;
}

.uk-logo-inverse { display: none; }


/* SVG
 ========================================================================== */

/*
 * 1. Fill all SVG elements with the current text color if no `fill` attribute is set
 * 2. Set the fill and stroke color of all SVG elements to the current text color
 * 3. Fix for uppercase attribute names in Edge. Will be fixed in Windows 10 builds 16251+
 */

/* 1 */
.uk-svg,
/* 2 */
.uk-svg:not(.uk-preserve) [fill*='#']:not(.uk-preserve),
.uk-svg:not(.uk-preserve) [FILL*='#']:not(.uk-preserve) { fill: currentcolor; } // 3
.uk-svg:not(.uk-preserve) [stroke*='#']:not(.uk-preserve),
.uk-svg:not(.uk-preserve) [STROKE*='#']:not(.uk-preserve) { stroke: currentcolor; } // 3

/*
 * Fix Firefox blurry SVG rendering: https://bugzilla.mozilla.org/show_bug.cgi?id=1046835
 */

.uk-svg { transform: translate(0,0); }


/* Disabled State
 ========================================================================== */

.uk-disabled { pointer-events: none; }


/* Drag State
 ========================================================================== */

/*
 * 1. Needed if moving over elements with have their own cursor on hover, e.g. links or buttons
 * 2. Fix dragging over iframes
 */

.uk-drag,
/* 1 */
.uk-drag * { cursor: move; }

/* 2 */
.uk-drag iframe { pointer-events: none; }


/* Dragover State
 ========================================================================== */

/*
 * Create a box-shadow when dragging a file over the upload area
 */

.uk-dragover { box-shadow: @dragover-box-shadow; }


/* Blend modes
 ========================================================================== */

.uk-blend-multiply { mix-blend-mode: multiply; }
.uk-blend-screen { mix-blend-mode: screen; }
.uk-blend-overlay { mix-blend-mode: overlay; }
.uk-blend-darken { mix-blend-mode: darken; }
.uk-blend-lighten { mix-blend-mode: lighten; }
.uk-blend-color-dodge { mix-blend-mode: color-dodge; }
.uk-blend-color-burn { mix-blend-mode: color-burn; }
.uk-blend-hard-light { mix-blend-mode: hard-light; }
.uk-blend-soft-light { mix-blend-mode: soft-light; }
.uk-blend-difference { mix-blend-mode: difference; }
.uk-blend-exclusion { mix-blend-mode: exclusion; }
.uk-blend-hue { mix-blend-mode: hue; }
.uk-blend-saturation { mix-blend-mode: saturation; }
.uk-blend-color { mix-blend-mode: color; }
.uk-blend-luminosity { mix-blend-mode: luminosity; }


/* Transform
========================================================================== */

.uk-transform-center { transform: translate(-50%, -50%); }


/* Transform Origin
========================================================================== */

.uk-transform-origin-top-left { transform-origin: 0 0; }
.uk-transform-origin-top-center { transform-origin: 50% 0; }
.uk-transform-origin-top-right { transform-origin: 100% 0; }
.uk-transform-origin-center-left { transform-origin: 0 50%; }
.uk-transform-origin-center-right { transform-origin: 100% 50%; }
.uk-transform-origin-bottom-left { transform-origin: 0 100%; }
.uk-transform-origin-bottom-center { transform-origin: 50% 100%; }
.uk-transform-origin-bottom-right { transform-origin: 100% 100%; }


// Hooks
// ========================================================================

.hook-utility-misc;

.hook-panel-scrollable() {}
.hook-box-shadow-bottom() {}
.hook-dropcap() {}
.hook-leader() {}
.hook-logo() {}
.hook-logo-hover() {}
.hook-utility-misc() {}


// Inverse
// ========================================================================

@inverse-logo-color:                           @inverse-global-color;
@inverse-logo-hover-color:                     @inverse-global-color;

.hook-inverse() {

    .uk-dropcap::first-letter,
    .uk-dropcap p:first-of-type::first-letter {
        .hook-inverse-dropcap;
    }

    .uk-leader-fill {
        .hook-inverse-leader;
    }

    .uk-logo {
        color: @inverse-logo-color;
        .hook-inverse-logo;
    }

    .uk-logo:hover,
    .uk-logo:focus {
        color: @inverse-logo-hover-color;
        .hook-inverse-logo-hover;
    }

    .uk-logo > :not(.uk-logo-inverse):not(:only-of-type) { display: none; }
    .uk-logo-inverse { display: inline; }

}

.hook-inverse-dropcap() {}
.hook-inverse-leader() {}
.hook-inverse-logo() {}
.hook-inverse-logo-hover() {}

// Name:            Flex
// Description:     Utilities for layouts based on flexbox
//
// Component:       `uk-flex-*`
//
// ========================================================================


/* ========================================================================
   Component: Flex
 ========================================================================== */

.uk-flex { display: flex; }
.uk-flex-inline { display: inline-flex; }

/*
 * Remove pseudo elements created by micro clearfix as precaution
 */

.uk-flex::before,
.uk-flex::after,
.uk-flex-inline::before,
.uk-flex-inline::after { display: none; }


/* Alignment
 ========================================================================== */

/*
 * Align items along the main axis of the current line of the flex container
 * Row: Horizontal
 */

// Default
.uk-flex-left { justify-content: flex-start; }
.uk-flex-center { justify-content: center; }
.uk-flex-right { justify-content: flex-end; }
.uk-flex-between { justify-content: space-between; }
.uk-flex-around { justify-content: space-around; }


/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-flex-left\@s { justify-content: flex-start; }
    .uk-flex-center\@s { justify-content: center; }
    .uk-flex-right\@s { justify-content: flex-end; }
    .uk-flex-between\@s { justify-content: space-between; }
    .uk-flex-around\@s { justify-content: space-around; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-flex-left\@m { justify-content: flex-start; }
    .uk-flex-center\@m { justify-content: center; }
    .uk-flex-right\@m { justify-content: flex-end; }
    .uk-flex-between\@m { justify-content: space-between; }
    .uk-flex-around\@m { justify-content: space-around; }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-flex-left\@l { justify-content: flex-start; }
    .uk-flex-center\@l { justify-content: center; }
    .uk-flex-right\@l { justify-content: flex-end; }
    .uk-flex-between\@l { justify-content: space-between; }
    .uk-flex-around\@l { justify-content: space-around; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-flex-left\@xl { justify-content: flex-start; }
    .uk-flex-center\@xl { justify-content: center; }
    .uk-flex-right\@xl { justify-content: flex-end; }
    .uk-flex-between\@xl { justify-content: space-between; }
    .uk-flex-around\@xl { justify-content: space-around; }

}

/*
 * Align items in the cross axis of the current line of the flex container
 * Row: Vertical
 */

// Default
.uk-flex-stretch { align-items: stretch; }
.uk-flex-top { align-items: flex-start; }
.uk-flex-middle { align-items: center; }
.uk-flex-bottom { align-items: flex-end; }


/* Direction
 ========================================================================== */

// Default
.uk-flex-row { flex-direction: row; }
.uk-flex-row-reverse { flex-direction: row-reverse; }
.uk-flex-column { flex-direction: column; }
.uk-flex-column-reverse { flex-direction: column-reverse; }


/* Wrap
 ========================================================================== */

// Default
.uk-flex-nowrap { flex-wrap: nowrap; }
.uk-flex-wrap { flex-wrap: wrap; }
.uk-flex-wrap-reverse { flex-wrap: wrap-reverse; }

/*
 * Aligns items within the flex container when there is extra space in the cross-axis
 * Only works if there is more than one line of flex items
 */

// Default
.uk-flex-wrap-stretch { align-content: stretch; }
.uk-flex-wrap-top { align-content: flex-start; }
.uk-flex-wrap-middle { align-content: center; }
.uk-flex-wrap-bottom { align-content: flex-end; }
.uk-flex-wrap-between { align-content: space-between; }
.uk-flex-wrap-around { align-content: space-around; }


/* Item ordering
 ========================================================================== */

/*
 * Default is 0
 */

.uk-flex-first { order: -1;}
.uk-flex-last { order: 99;}


/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-flex-first\@s { order: -1; }
    .uk-flex-last\@s { order: 99; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-flex-first\@m { order: -1; }
    .uk-flex-last\@m { order: 99; }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-flex-first\@l { order: -1; }
    .uk-flex-last\@l { order: 99; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-flex-first\@xl { order: -1; }
    .uk-flex-last\@xl { order: 99; }

}


/* Item dimensions
 ========================================================================== */

/*
 * Initial: 0 1 auto
 * Content dimensions, but shrinks
 */

/*
 * No Flex: 0 0 auto
 * Content dimensions
 */

.uk-flex-none { flex: none; }

/*
 * Relative Flex: 1 1 auto
 * Space is allocated considering content
 */

.uk-flex-auto { flex: auto; }

/*
 * Absolute Flex: 1 1 0%
 * Space is allocated solely based on flex
 */

.uk-flex-1 { flex: 1; }


// Hooks
// ========================================================================

.hook-flex-misc;

.hook-flex-misc() {}
// Name:            Margin
// Description:     Utilities for margins
//
// Component:       `uk-margin-*`
//                  `uk-margin-small-*`
//                  `uk-margin-medium-*`
//                  `uk-margin-large-*`
//                  `uk-margin-xlarge-*`
//                  `uk-margin-remove-*`
//                  `uk-margin-auto-*`
//
// ========================================================================


// Variables
// ========================================================================

@margin-margin:                                        @global-margin;

@margin-small-margin:                                  @global-small-margin;

@margin-medium-margin:                                 @global-medium-margin;

@margin-large-margin:                                  @global-medium-margin;
@margin-large-margin-l:                                @global-large-margin;

@margin-xlarge-margin:                                 @global-large-margin;
@margin-xlarge-margin-l:                               @global-xlarge-margin;


/* ========================================================================
   Component: Margin
 ========================================================================== */

/*
 * Default
 */

.uk-margin { margin-bottom: @margin-margin; }
* + .uk-margin { margin-top: @margin-margin !important; }

.uk-margin-top { margin-top: @margin-margin !important; }
.uk-margin-bottom { margin-bottom: @margin-margin !important; }
.uk-margin-left { margin-left: @margin-margin !important; }
.uk-margin-right { margin-right: @margin-margin !important; }


/* Small
 ========================================================================== */

.uk-margin-small { margin-bottom: @margin-small-margin; }
* + .uk-margin-small { margin-top: @margin-small-margin !important; }

.uk-margin-small-top { margin-top: @margin-small-margin !important; }
.uk-margin-small-bottom { margin-bottom: @margin-small-margin !important; }
.uk-margin-small-left { margin-left: @margin-small-margin !important; }
.uk-margin-small-right { margin-right: @margin-small-margin !important; }


/* Medium
 ========================================================================== */

.uk-margin-medium { margin-bottom: @margin-medium-margin; }
* + .uk-margin-medium { margin-top: @margin-medium-margin !important; }

.uk-margin-medium-top { margin-top: @margin-medium-margin !important; }
.uk-margin-medium-bottom { margin-bottom: @margin-medium-margin !important; }
.uk-margin-medium-left { margin-left: @margin-medium-margin !important; }
.uk-margin-medium-right { margin-right: @margin-medium-margin !important; }


/* Large
 ========================================================================== */

.uk-margin-large { margin-bottom: @margin-large-margin; }
* + .uk-margin-large { margin-top: @margin-large-margin !important; }

.uk-margin-large-top { margin-top: @margin-large-margin !important; }
.uk-margin-large-bottom { margin-bottom: @margin-large-margin !important; }
.uk-margin-large-left { margin-left: @margin-large-margin !important; }
.uk-margin-large-right { margin-right: @margin-large-margin !important; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-margin-large { margin-bottom: @margin-large-margin-l; }
    * + .uk-margin-large { margin-top: @margin-large-margin-l !important; }

    .uk-margin-large-top { margin-top: @margin-large-margin-l !important; }
    .uk-margin-large-bottom { margin-bottom: @margin-large-margin-l !important; }
    .uk-margin-large-left { margin-left: @margin-large-margin-l !important; }
    .uk-margin-large-right { margin-right: @margin-large-margin-l !important; }

}


/* XLarge
 ========================================================================== */

.uk-margin-xlarge { margin-bottom: @margin-xlarge-margin; }
* + .uk-margin-xlarge { margin-top: @margin-xlarge-margin !important; }

.uk-margin-xlarge-top { margin-top: @margin-xlarge-margin !important; }
.uk-margin-xlarge-bottom { margin-bottom: @margin-xlarge-margin !important; }
.uk-margin-xlarge-left { margin-left: @margin-xlarge-margin !important; }
.uk-margin-xlarge-right { margin-right: @margin-xlarge-margin !important; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-margin-xlarge { margin-bottom: @margin-xlarge-margin-l; }
    * + .uk-margin-xlarge { margin-top: @margin-xlarge-margin-l !important; }

    .uk-margin-xlarge-top { margin-top: @margin-xlarge-margin-l !important; }
    .uk-margin-xlarge-bottom { margin-bottom: @margin-xlarge-margin-l !important; }
    .uk-margin-xlarge-left { margin-left: @margin-xlarge-margin-l !important; }
    .uk-margin-xlarge-right { margin-right: @margin-xlarge-margin-l !important; }

}


/* Remove
 ========================================================================== */

.uk-margin-remove { margin: 0 !important; }
.uk-margin-remove-top { margin-top: 0 !important; }
.uk-margin-remove-bottom { margin-bottom: 0 !important; }
.uk-margin-remove-left { margin-left: 0 !important; }
.uk-margin-remove-right { margin-right: 0 !important; }

.uk-margin-remove-vertical {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

.uk-margin-remove-adjacent + * { margin-top: 0 !important; }


/* Auto
 ========================================================================== */

.uk-margin-auto {
    margin-left: auto !important;
    margin-right: auto !important;
}

.uk-margin-auto-top { margin-top: auto !important; }
.uk-margin-auto-bottom { margin-bottom: auto !important; }
.uk-margin-auto-left { margin-left: auto !important; }
.uk-margin-auto-right { margin-right: auto !important; }

.uk-margin-auto-vertical {
    margin-top: auto !important;
    margin-bottom: auto !important;
}


// Hooks
// ========================================================================

.hook-margin-misc;

.hook-margin-misc() {}

// Name:            Padding
// Description:     Utilities for padding
//
// Component:       `uk-padding`
//                  `uk-padding-large`
//                  `uk-padding-remove-*`
//
// ========================================================================


// Variables
// ========================================================================

@padding-padding:                                       @global-gutter;
@padding-padding-l:                                     @global-medium-gutter;

@padding-small-padding:                                 @global-small-gutter;

@padding-large-padding:                                 @global-gutter;
@padding-large-padding-l:                               @global-large-gutter;


/* ========================================================================
   Component: Padding
 ========================================================================== */

.uk-padding { padding: @padding-padding; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-padding { padding: @padding-padding-l; }

}


/* Small
 ========================================================================== */

.uk-padding-small { padding: @padding-small-padding; }


/* Large
 ========================================================================== */

.uk-padding-large { padding: @padding-large-padding; }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-padding-large { padding: @padding-large-padding-l; }

}


/* Remove
 ========================================================================== */

.uk-padding-remove { padding: 0 !important; }
.uk-padding-remove-top { padding-top: 0 !important; }
.uk-padding-remove-bottom { padding-bottom: 0 !important; }
.uk-padding-remove-left { padding-left: 0 !important; }
.uk-padding-remove-right { padding-right: 0 !important; }

.uk-padding-remove-vertical {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}

.uk-padding-remove-horizontal {
    padding-left: 0 !important;
    padding-right: 0 !important;
}


// Hooks
// ========================================================================

.hook-padding-misc;

.hook-padding-misc() {}

// Name:            Position
// Description:     Utilities to position content
//
// Component:       `uk-position-absolute`
//                  `uk-position-relative`
//                  `uk-position-z-index`
//                  `uk-position-top`
//                  `uk-position-bottom`
//                  `uk-position-left`
//                  `uk-position-right`
//                  `uk-position-top-left`
//                  `uk-position-top-center`
//                  `uk-position-top-right`
//                  `uk-position-bottom-left`
//                  `uk-position-bottom-center`
//                  `uk-position-bottom-right`
//                  `uk-position-center`
//                  `uk-position-center-left`
//                  `uk-position-center-right`
//                  `uk-position-cover`
//
// Modifiers:       `uk-position-small`
//                  `uk-position-medium`
//                  `uk-position-large`
//
// ========================================================================


// Variables
// ========================================================================

@position-small-margin:                                @global-small-gutter;
@position-medium-margin:                               @global-gutter;
@position-large-margin:                                @global-gutter;
@position-large-margin-l:                              50px;


/* ========================================================================
   Component: Position
 ========================================================================== */


/* Directions
 ========================================================================== */

[class*='uk-position-top'],
[class*='uk-position-bottom'],
[class*='uk-position-left'],
[class*='uk-position-right'],
[class*='uk-position-center'] { position: absolute !important; }


/* Edges
 ========================================================================== */

/* Don't use `width: 100%` because it is wrong if the parent has padding. */
.uk-position-top {
    top: 0;
    left: 0;
    right: 0;
}

.uk-position-bottom {
    bottom: 0;
    left: 0;
    right: 0;
}

.uk-position-left {
    top: 0;
    bottom: 0;
    left: 0;
}

.uk-position-right {
    top: 0;
    bottom: 0;
    right: 0;
}


/* Corners
 ========================================================================== */

.uk-position-top-left {
    top: 0;
    left: 0;
}

.uk-position-top-right {
    top: 0;
    right: 0;
}

.uk-position-bottom-left {
    bottom: 0;
    left: 0;
}

.uk-position-bottom-right {
    bottom: 0;
    right: 0;
}

/*
 * Center
 * 1. Fix text wrapping if content is larger than 50% of the container (Not working in Firefox)
 * 2. Fix text wrapping for Firefox
 */

.uk-position-center {
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    /* 1 */
    display: table;
    /* 2 */
    width: -moz-max-content;
    max-width: 100%;
    box-sizing: border-box;
}

/* Vertical */
.uk-position-center-left,
.uk-position-center-right {
    top: 50%;
    transform: translateY(-50%);
}

.uk-position-center-left { left: 0; }
.uk-position-center-right { right: 0; }

/* Horizontal */
.uk-position-top-center,
.uk-position-bottom-center {
    left: 50%;
    transform: translateX(-50%);
    /* 1 */
    display: table;
    /* 2 */
    width: -moz-max-content;
    max-width: 100%;
    box-sizing: border-box;
}

.uk-position-top-center { top: 0; }
.uk-position-bottom-center { bottom: 0; }


/* Cover
 ========================================================================== */

.uk-position-cover {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}


/* Utility
 ========================================================================== */

.uk-position-relative { position: relative !important; }

.uk-position-absolute { position: absolute !important; }

.uk-position-fixed { position: fixed !important; }

.uk-position-z-index { z-index: 1; }


/* Margin modifier
 ========================================================================== */

/*
 * Small
 */

.uk-position-small { margin: @position-small-margin; }

.uk-position-small.uk-position-center { transform: translate(-50%, -50%) translate(-@position-small-margin, -@position-small-margin); }

.uk-position-small.uk-position-center-left,
.uk-position-small.uk-position-center-right { transform: translateY(-50%) translateY(-@position-small-margin); }

.uk-position-small.uk-position-top-center,
.uk-position-small.uk-position-bottom-center { transform: translateX(-50%) translateX(-@position-small-margin); }

/*
 * Medium
 */

.uk-position-medium { margin: @position-medium-margin; }

.uk-position-medium.uk-position-center { transform: translate(-50%, -50%) translate(-@position-medium-margin, -@position-medium-margin); }

.uk-position-medium.uk-position-center-left,
.uk-position-medium.uk-position-center-right { transform: translateY(-50%) translateY(-@position-medium-margin); }

.uk-position-medium.uk-position-top-center,
.uk-position-medium.uk-position-bottom-center { transform: translateX(-50%) translateX(-@position-medium-margin); }

/*
 * Large
 */

.uk-position-large { margin: @position-large-margin; }

.uk-position-large.uk-position-center { transform: translate(-50%, -50%) translate(-@position-large-margin, -@position-large-margin); }

.uk-position-large.uk-position-center-left,
.uk-position-large.uk-position-center-right { transform: translateY(-50%) translateY(-@position-large-margin); }

.uk-position-large.uk-position-top-center,
.uk-position-large.uk-position-bottom-center { transform: translateX(-50%) translateX(-@position-large-margin); }

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-position-large { margin: @position-large-margin-l; }

    .uk-position-large.uk-position-center { transform: translate(-50%, -50%) translate(-@position-large-margin-l, -@position-large-margin-l); }

    .uk-position-large.uk-position-center-left,
    .uk-position-large.uk-position-center-right { transform: translateY(-50%) translateY(-@position-large-margin-l); }

    .uk-position-large.uk-position-top-center,
    .uk-position-large.uk-position-bottom-center { transform: translateX(-50%) translateX(-@position-large-margin-l); }

}


// Hooks
// ========================================================================

.hook-position-misc;

.hook-position-misc() {}

// Name:            Transition
// Description:     Utilities for transitions
//
// Component:       `uk-transition-*`
//
// Modifiers:       `uk-transition-fade`
//                  `uk-transition-scale-up`
//                  `uk-transition-scale-down`
//                  `uk-transition-slide-top-*`
//                  `uk-transition-slide-bottom-*`
//                  `uk-transition-slide-left-*`
//                  `uk-transition-slide-right-*`
//                  `uk-transition-opaque`
//                  `uk-transition-slow`
//
// Sub-objects:     `uk-transition-toggle`,
//                  `uk-transition-active`
//
// States:          `uk-hover`
//                  `uk-active`
//
// ========================================================================


// Variables
// ========================================================================

@transition-duration:                           0.3s;

@transition-scale:                              1.1;

@transition-slide-small-translate:              10px;
@transition-slide-medium-translate:             50px;

@transition-slow-duration:                      0.7s;


/* ========================================================================
   Component: Transition
 ========================================================================== */

/*
 * Using multiple selectors to exclude `uk-transition-toggle`
 * Note: Transitions don't work with `uk-postion-center-*` classes because they also use `transform`
 *       Just put the transition in an extra `div`
 */

.uk-transition-fade,
[class*='uk-transition-scale'],
[class*='uk-transition-slide'] {
    transition: @transition-duration ease-out;
    transition-property: opacity, transform, filter;
}

.uk-transition-toggle:focus { outline: none; }

/*
 * Fade
 */

.uk-transition-fade { opacity: 0; }

/* Show */
.uk-transition-toggle:hover [class*='uk-transition-fade'],
.uk-transition-toggle.uk-hover [class*='uk-transition-fade'],
.uk-transition-toggle:focus [class*='uk-transition-fade'],
.uk-transition-active.uk-active [class*='uk-transition-fade'] { opacity: 1; }

/*
 * Scale
 * Note: Using `scale3d` for better image rendering
 */

[class*='uk-transition-scale'] { opacity: 0; }

.uk-transition-scale-up { transform: scale3d(1,1,1); }

.uk-transition-scale-down { transform: scale3d(@transition-scale,@transition-scale,1); }

/* Show */
.uk-transition-toggle:hover .uk-transition-scale-up,
.uk-transition-toggle.uk-hover .uk-transition-scale-up,
.uk-transition-toggle:focus .uk-transition-scale-up,
.uk-transition-active.uk-active .uk-transition-scale-up {
    opacity: 1;
    transform: scale3d(@transition-scale,@transition-scale,1);
}

.uk-transition-toggle:hover .uk-transition-scale-down,
.uk-transition-toggle.uk-hover .uk-transition-scale-down,
.uk-transition-toggle:focus .uk-transition-scale-down,
.uk-transition-active.uk-active .uk-transition-scale-down {
    opacity: 1;
    transform: scale3d(1,1,1);
}

/*
 * Slide
 */

[class*='uk-transition-slide'] { opacity: 0; }

.uk-transition-slide-top { transform: translateY(-100%); }
.uk-transition-slide-bottom { transform: translateY(100%); }
.uk-transition-slide-left { transform: translateX(-100%); }
.uk-transition-slide-right { transform: translateX(100%); }

.uk-transition-slide-top-small { transform: translateY(-@transition-slide-small-translate); }
.uk-transition-slide-bottom-small { transform: translateY(@transition-slide-small-translate); }
.uk-transition-slide-left-small { transform: translateX(-@transition-slide-small-translate); }
.uk-transition-slide-right-small { transform: translateX(@transition-slide-small-translate); }

.uk-transition-slide-top-medium { transform: translateY(-@transition-slide-medium-translate); }
.uk-transition-slide-bottom-medium { transform: translateY(@transition-slide-medium-translate); }
.uk-transition-slide-left-medium { transform: translateX(-@transition-slide-medium-translate); }
.uk-transition-slide-right-medium { transform: translateX(@transition-slide-medium-translate); }

/* Show */
.uk-transition-toggle:hover [class*='uk-transition-slide'],
.uk-transition-toggle.uk-hover [class*='uk-transition-slide'],
.uk-transition-toggle:focus [class*='uk-transition-slide'],
.uk-transition-active.uk-active [class*='uk-transition-slide'] {
    opacity: 1;
    transform: translateX(0) translateY(0);
}


/* Opacity modifier
========================================================================== */

.uk-transition-opaque { opacity: 1; }


/* Duration modifiers
========================================================================== */

.uk-transition-slow { transition-duration: @transition-slow-duration; }


// Hooks
// ========================================================================

.hook-transition-misc;

.hook-transition-misc() {}

// Name:            Visibility
// Description:     Utilities to show or hide content on breakpoints, hover or touch
//
// Component:       `uk-hidden-*`
//                  `uk-visible-*`
//                  `uk-invisible`
//                  `uk-visible-toggle`
//                  `uk-hidden-hover`
//                  `uk-invisible-hover`
//                  `uk-hidden-touch`
//                  `uk-hidden-notouch`
//
// ========================================================================


/* ========================================================================
   Component: Visibility
 ========================================================================== */

/*
 * Hidden
 * `hidden` attribute also set here to make it stronger
 */

[hidden],
.uk-hidden { display: none !important; }

/* Phone landscape and bigger */
@media (min-width: @breakpoint-small) {

    .uk-hidden\@s { display: none !important; }

}

/* Tablet landscape and bigger */
@media (min-width: @breakpoint-medium) {

    .uk-hidden\@m { display: none !important; }

}

/* Desktop and bigger */
@media (min-width: @breakpoint-large) {

    .uk-hidden\@l { display: none !important; }

}

/* Large screen and bigger */
@media (min-width: @breakpoint-xlarge) {

    .uk-hidden\@xl { display: none !important; }

}

/*
 * Visible
 */

/* Phone portrait and smaller */
@media (max-width: @breakpoint-xsmall-max) {

    .uk-visible\@s { display: none !important; }

}

/* Phone landscape and smaller */
@media (max-width: @breakpoint-small-max) {

    .uk-visible\@m { display: none !important; }

}

/* Tablet landscape and smaller */
@media (max-width: @breakpoint-medium-max) {

    .uk-visible\@l { display: none !important; }

}

/* Desktop and smaller */
@media (max-width: @breakpoint-large-max) {

    .uk-visible\@xl { display: none !important; }

}


/* Visibility
 ========================================================================== */

.uk-invisible { visibility: hidden !important; }


/* Hover
 ========================================================================== */

/*
 * Hidden
 * Can't use `display: hidden` because it's not focusable. This is accessible through keyboard.
 */

.uk-visible-toggle:not(:hover):not(.uk-hover) .uk-hidden-hover:not(:focus) {
    position: absolute !important;
    width: 0 !important;
    height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    overflow: hidden !important;
}

/*
 * Invisible
 * Can't use `visibility: hidden` because it's not focusable. This is accessible through keyboard.
 */

.uk-visible-toggle:not(:hover):not(.uk-hover) .uk-invisible-hover:not(:focus) { opacity: 0 !important; }


/* Touch
 ========================================================================== */

/*
 * Hide if primary pointing device has limited accuracy, e.g. a touch screen.
 * Works on mobile browsers: Safari, Chrome and Android browser
 */

@media (pointer: coarse) {
    .uk-hidden-touch { display: none !important; }
}

/*
 * Hide if primary pointing device is accurate, e.g. mouse.
 * 1. Fallback for IE11 and Firefox, because `pointer` is not supported
 * 2. Reset if supported
 */

/* 1 */
.uk-hidden-notouch { display: none !important; }

@media (pointer: coarse) {
    .uk-hidden-notouch { display: block !important; }
}


// Hooks
// ========================================================================

.hook-visibility-misc;

.hook-visibility-misc() {}

// Name:            Inverse
// Description:     Inverse component style for light or dark backgrounds
//
// Component:       `uk-light`
//                  `uk-dark`
//
// ========================================================================


// Variables
// ========================================================================

@inverse-global-color-mode:                     light;

@inverse-global-color:                          fade(@global-inverse-color, 70%);
@inverse-global-emphasis-color:                 @global-inverse-color;
@inverse-global-muted-color:                    fade(@global-inverse-color, 50%);
@inverse-global-inverse-color:                  @global-color;

@inverse-global-primary-background:             @global-inverse-color;
@inverse-global-muted-background:               fade(@global-inverse-color, 10%);

@inverse-global-border:                         fade(@global-inverse-color, 20%);


/* ========================================================================
   Component: Inverse
 ========================================================================== */

/*
 * Implemented class depends on the general theme color
 * `uk-light` is for light colors on dark backgrounds
 * `uk-dark` is or dark colors on light backgrounds
 */

.uk-light when (@inverse-global-color-mode = light) {

    .hook-inverse;

}

.uk-dark when (@inverse-global-color-mode = dark) {

    .hook-inverse;

}


// Hooks
// ========================================================================

.hook-inverse() {}
// Name:            Print
// Description:     Optimize page for printing
//
// Adapted from http://github.com/h5bp/html5-boilerplate
//
// Modifications:   Removed link `href` and `title` related rules
//
// ========================================================================


/* ========================================================================
   Component: Print
 ========================================================================== */

@media print {

    *,
    *::before,
    *::after {
        background: transparent !important;
        color: black !important;
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited { text-decoration: underline; }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead { display: table-header-group; }

    tr,
    img { page-break-inside: avoid; }

    img { max-width: 100% !important; }

    @page { margin: 0.5cm; }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 { page-break-after: avoid; }

   .hook-print;

}

// Hooks
// ========================================================================

.hook-print() {}

//
// Component: Variables
//
// ========================================================================


// Global variables
// ========================================================================

//
// Typography
//

//
// Colors
//

//
// Backgrounds
//

//
// Borders
//

//
// Spacings
//

//
// Controls
//

//
// Z-index
//
//
// Component: Base
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@base-code-padding-horizontal:                  6px;
@base-code-padding-vertical:                    2px;
@base-code-background:                          @global-muted-background;

@base-blockquote-color:                         @global-emphasis-color;

@base-blockquote-footer-color:                  @global-color;

@base-pre-padding:                              10px;
@base-pre-background:                           @global-background;
@base-pre-border-width:                         @global-border-width;
@base-pre-border:                               @global-border;
@base-pre-border-radius:                        3px;


// Body
// ========================================================================

.hook-base-body() {}


// Links
// ========================================================================

.hook-base-link() {}

.hook-base-link-hover() {}


// Text-level semantics
// ========================================================================

.hook-base-code() {
    padding: @base-code-padding-vertical @base-code-padding-horizontal;
    background: @base-code-background;
}


// Headings
// ========================================================================

.hook-base-heading() {}

.hook-base-h1() {}

.hook-base-h2() {}

.hook-base-h3() {}

.hook-base-h4() {}

.hook-base-h5() {}

.hook-base-h6() {}


// Horizontal rules
// ========================================================================

.hook-base-hr() {}


// Blockquotes
// ========================================================================

.hook-base-blockquote() {
    color: @base-blockquote-color;
}

.hook-base-blockquote-footer() {

    color: @base-blockquote-footer-color;

    &::before { content: "— "; }

}


// Preformatted text
// ========================================================================

.hook-base-pre() {
    padding: @base-pre-padding;
    border: @base-pre-border-width solid @base-pre-border;
    border-radius: @base-pre-border-radius;
    background: @base-pre-background;
}


// Miscellaneous
// ========================================================================

.hook-base-misc() {}


// Inverse
// ========================================================================

@inverse-base-blockquote-color:                @inverse-global-emphasis-color;
@inverse-base-blockquote-footer-color:         @inverse-global-color;

.hook-inverse-base-link() {}
.hook-inverse-base-link-hover() {}

.hook-inverse-base-code() {
    background: @inverse-global-muted-background;
}

.hook-inverse-base-heading() {}

.hook-inverse-base-h1() {}
.hook-inverse-base-h2() {}
.hook-inverse-base-h3() {}
.hook-inverse-base-h4() {}
.hook-inverse-base-h5() {}
.hook-inverse-base-h6() {}

.hook-inverse-base-blockquote() { color: @inverse-base-blockquote-color; }
.hook-inverse-base-blockquote-footer() { color: @inverse-base-blockquote-footer-color; }

.hook-inverse-base-hr() {}
//
// Component: Link
//
// ========================================================================


// Variables
// ========================================================================


// Muted
// ========================================================================

.hook-link-muted() {}

.hook-link-muted-hover() {}


// Text
// ========================================================================

.hook-link-text() {}

.hook-link-text-hover() {}


// Reset
// ========================================================================

.hook-link-reset() {}


// Miscellaneous
// ========================================================================

.hook-link-misc() {}


// Inverse
// ========================================================================

.hook-inverse-link-muted() {}
.hook-inverse-link-muted-hover() {}

.hook-inverse-link-text-hover() {}

//
// Component: Heading
//
// ========================================================================


// Variables
// ========================================================================


// Primary
// ========================================================================

.hook-heading-primary() {}


// Hero
// ========================================================================

.hook-heading-hero() {}


// Divider
// ========================================================================

.hook-heading-divider() {}


// Bullet
// ========================================================================

.hook-heading-bullet() {}


// Line
// ========================================================================

.hook-heading-line() {}



// Miscellaneous
// ========================================================================

.hook-heading-misc() {}


// Inverse
// ========================================================================

.hook-inverse-heading-primary() {}

.hook-inverse-heading-hero() {}

.hook-inverse-heading-divider() {}

.hook-inverse-heading-bullet() {}

.hook-inverse-heading-line() {}

//
// Component: Divider
//
// ========================================================================


// Variables
// ========================================================================


// Icon
// ========================================================================

.hook-divider-icon() {}

.hook-divider-icon-line() {}

.hook-divider-icon-line-left() {}

.hook-divider-icon-line-right() {}


// Small
// ========================================================================

.hook-divider-small() {}


// Miscellaneous
// ========================================================================

.hook-divider-misc() {}


// Inverse
// ========================================================================

.hook-inverse-divider-icon() {}
.hook-inverse-divider-icon-line() {}

.hook-inverse-divider-small() {}
//
// Component: List
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@list-striped-border-width:                     @global-border-width;
@list-striped-border:                           @global-border;


// Style modifiers
// ========================================================================

.hook-list-divider() {}

.hook-list-striped() {

    &:nth-of-type(odd) {
        border-top: @list-striped-border-width solid @list-striped-border;
        border-bottom: @list-striped-border-width solid @list-striped-border;
    }

}

.hook-list-bullet() {}


// Miscellaneous
// ========================================================================

.hook-list-misc() {}


// Inverse
// ========================================================================

.hook-inverse-list-divider() {}
.hook-inverse-list-striped() {

    &:nth-of-type(odd) {
        border-top-color: @inverse-global-border;
        border-bottom-color: @inverse-global-border;
    }

}
.hook-inverse-list-bullet() {}
//
// Component: Description list
//
// ========================================================================


// Variables
// ========================================================================

@description-list-term-font-size:                      @global-small-font-size;
@description-list-term-font-weight:                    normal;
@description-list-term-text-transform:                 uppercase;


// Component
// ========================================================================

.hook-description-list-term() {
    font-size: @description-list-term-font-size;
    font-weight: @description-list-term-font-weight;
    text-transform: @description-list-term-text-transform;
}

.hook-description-list-description() {}


// Style modifier
// ========================================================================

.hook-description-list-divider-term() {}


// Miscellaneous
// ========================================================================

.hook-description-list-misc() {}
//
// Component: Table
//
// ========================================================================


// Variables
// ========================================================================

@table-header-cell-font-size:                   @global-small-font-size;
@table-header-cell-font-weight:                 normal;
@table-header-cell-color:                       @global-muted-color;

//
// New
//

@table-striped-border-width:                    @global-border-width;
@table-striped-border:                          @global-border;


// Component
// ========================================================================

.hook-table-header-cell() { text-transform: uppercase; }

.hook-table-cell() {}

.hook-table-footer() {  }

.hook-table-caption() {}

.hook-table-row-active() {}


// Style modifiers
// ========================================================================

.hook-table-divider() {}

.hook-table-striped() {
    border-top: @table-striped-border-width solid @table-striped-border;
    border-bottom: @table-striped-border-width solid @table-striped-border;
}

.hook-table-hover() {}


// Size modifier
// ========================================================================

.hook-table-small() {}


// Miscellaneous
// ========================================================================

.hook-table-misc() {

    .uk-table tbody tr { transition: background-color 0.1s linear; }

}


// Inverse
// ========================================================================

.hook-inverse-table-header-cell() {}
.hook-inverse-table-caption() {}
.hook-inverse-table-row-active() {}
.hook-inverse-table-divider() {}
.hook-inverse-table-striped() {
    border-top-color: @inverse-global-border;
    border-bottom-color: @inverse-global-border;
}
.hook-inverse-table-hover() {}
//
// Component: Icon
//
// ========================================================================


// Variables
// ========================================================================


// Style modifiers
// ========================================================================

//
// Link
//

.hook-icon-link() {}

.hook-icon-link-hover() {}

.hook-icon-link-active() {}

//
// Button
//

.hook-icon-button() {
    transition: 0.1s ease-in-out;
    transition-property: color, background-color
}

.hook-icon-button-hover() {}

.hook-icon-button-active() {}


// Miscellaneous
// ========================================================================

.hook-icon-misc() {}


// Inverse
// ========================================================================

.hook-inverse-icon-link() {}
.hook-inverse-icon-link-hover() {}
.hook-inverse-icon-link-active() {}

.hook-inverse-icon-button() {}
.hook-inverse-icon-button-hover() {}
.hook-inverse-icon-button-active() {}
//
// Component: Form Range
//
// ========================================================================


// Variables
// ========================================================================

@form-range-thumb-background:                   @global-background;

//
// New
//

@form-range-thumb-border-width:                 @global-border-width;
@form-range-thumb-border:                       darken(@global-border, 10%);

@form-range-track-border-radius:                500px;


// Component
// ========================================================================

.hook-form-range() {}


// Thumb
// ========================================================================

.hook-form-range-thumb() { border: @form-range-thumb-border-width solid @form-range-thumb-border; }


// Track
// ========================================================================

.hook-form-range-track() { border-radius: @form-range-track-border-radius; }

.hook-form-range-track-focus() {}


// Miscellaneous
// ========================================================================

.hook-form-range-misc() {}
//
// Component: Form
//
// ========================================================================


// Variables
// ========================================================================

@form-line-height:                              @form-height - (2* @form-border-width);

@form-background:                               @global-background;
@form-focus-background:                         @global-background;

@form-small-line-height:                        @form-small-height - (2* @form-border-width);
@form-large-line-height:                        @form-large-height - (2* @form-border-width);

@form-radio-background:                         transparent;

@form-stacked-margin-bottom:                    5px;

//
// New
//

@form-border-width:                             @global-border-width;
@form-border:                                   @global-border;

@form-focus-border:                             @global-primary-background;

@form-disabled-border:                          @global-border;

@form-danger-border:                            @global-danger-background;
@form-success-border:                           @global-success-background;

@form-blank-focus-border:                       @global-border;
@form-blank-focus-border-style:                 dashed;

@form-radio-border-width:                       @global-border-width;
@form-radio-border:                             darken(@global-border, 10%);

@form-radio-focus-border:                       @global-primary-background;

@form-radio-checked-border:                     transparent;

@form-radio-disabled-border:                    @global-border;

@form-label-color:                              @global-emphasis-color;
@form-label-font-size:                          @global-small-font-size;


// Component
// ========================================================================

.hook-form() {
    border: @form-border-width solid @form-border;
    transition: 0.2s ease-in-out;
    transition-property: color, background-color, border;
}

.hook-form-single-line() {}

.hook-form-multi-line() {}

.hook-form-focus() { border-color: @form-focus-border; }

.hook-form-disabled() { border-color: @form-disabled-border; }


// Style modifiers
// ========================================================================

.hook-form-danger() { border-color: @form-danger-border; }

.hook-form-success() { border-color: @form-success-border; }

.hook-form-blank() { border-color: transparent; }

.hook-form-blank-focus() {
    border-color: @form-blank-focus-border;
    border-style: @form-blank-focus-border-style;
}


// Radio and checkbox
// ========================================================================

.hook-form-radio() {
    border: @form-radio-border-width solid @form-radio-border;
    transition: 0.2s ease-in-out;
    transition-property: background-color, border;
}

.hook-form-radio-focus() { border-color: @form-radio-focus-border; }

.hook-form-radio-checked() { border-color: @form-radio-checked-border; }

.hook-form-radio-checked-focus() {}

.hook-form-radio-disabled() { border-color: @form-radio-disabled-border; }


// Legend
// ========================================================================

.hook-form-legend() {}


// Label
// ========================================================================

.hook-form-label() {
    color: @form-label-color;
    font-size: @form-label-font-size;
}


// Layout
// ========================================================================

.hook-form-stacked-label() {}

.hook-form-horizontal-label() {}


// Miscellaneous
// ========================================================================

.hook-form-misc() {}


// Inverse
// ========================================================================

@inverse-form-label-color:                      @inverse-global-emphasis-color;

.hook-inverse-form() { border-color: @inverse-global-border; }
.hook-inverse-form-focus() { border-color: @inverse-global-color; }

.hook-inverse-form-radio() { border-color: @inverse-global-border; }
.hook-inverse-form-radio-focus() { border-color: @inverse-global-color; }

.hook-inverse-form-radio-checked() { border-color: @inverse-global-color; }
.hook-inverse-form-radio-checked-focus() {}

.hook-inverse-form-label() { color: @inverse-form-label-color; }
//
// Component: Button
//
// ========================================================================


// Variables
// ========================================================================

@button-line-height:                            @global-control-height - (@button-border-width * 2);
@button-small-line-height:                      @global-control-small-height - (@button-border-width * 2);
@button-large-line-height:                      @global-control-large-height - (@button-border-width * 2);

@button-font-size:                              @global-small-font-size;
@button-large-font-size:                        @global-small-font-size;

@button-default-background:                     transparent;
@button-default-hover-background:               transparent;
@button-default-active-background:              transparent;

@button-disabled-background:                    transparent;

@button-text-color:                             @global-emphasis-color;
@button-text-hover-color:                       @global-emphasis-color;

//
// New
//

@button-text-transform:                         uppercase;

@button-border-width:                           @global-border-width;

@button-default-border:                         @global-border;
@button-default-hover-border:                   darken(@global-border, 20%);
@button-default-active-border:                  darken(@global-border, 30%);

@button-disabled-border:                        @global-border;

@button-text-border-width:                      @global-border-width;
@button-text-border:                            @button-text-hover-color;


// Component
// ========================================================================

.hook-button() {
    text-transform: @button-text-transform;
    transition: 0.1s ease-in-out;
    transition-property: color, background-color, border-color;
}

.hook-button-hover() {}

.hook-button-focus() {}

.hook-button-active() {}


// Style modifiers
// ========================================================================

.hook-button-default() { border: @button-border-width solid @button-default-border; }

.hook-button-default-hover() { border-color: @button-default-hover-border; }

.hook-button-default-active() { border-color: @button-default-active-border; }

//
// Primary
//

.hook-button-primary() { border: @button-border-width solid transparent; }

.hook-button-primary-hover() {}

.hook-button-primary-active() {}

//
// Secondary
//

.hook-button-secondary() { border: @button-border-width solid transparent; }

.hook-button-secondary-hover() {}

.hook-button-secondary-active() {}

//
// Danger
//

.hook-button-danger() { border: @button-border-width solid transparent; }

.hook-button-danger-hover() {}

.hook-button-danger-active() {}


// Disabled
// ========================================================================

.hook-button-disabled() { border-color: @button-disabled-border; }


// Size modifiers
// ========================================================================

.hook-button-small() {}

.hook-button-large() {}


// Text modifier
// ========================================================================

.hook-button-text() {

    position: relative;

    &::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 100%;
        border-bottom: @button-text-border-width solid @button-text-border;
        transition: right 0.3s ease-out;
    }

}

.hook-button-text-hover() {

    &::before { right: 0; }

}

.hook-button-text-disabled() {

    &::before { display: none; }

}


// Link modifier
// ========================================================================

.hook-button-link() {}


// Miscellaneous
// ========================================================================

.hook-button-misc() {

    /* Group
     ========================================================================== */

    /*
     * Collapse border
     */

    .uk-button-group > .uk-button:nth-child(n+2),
    .uk-button-group > div:nth-child(n+2) .uk-button { margin-left: -@button-border-width; }

    /*
     * Create position context to superimpose the successor elements border
     * Known issue: If you use an `a` element as button and an icon inside,
     * the active state will not work if you click the icon inside the button
     * Workaround: Just use a `button` or `input` element as button
     */

    .uk-button-group .uk-button:hover,
    .uk-button-group .uk-button:focus,
    .uk-button-group .uk-button:active,
    .uk-button-group .uk-button.uk-active {
        position: relative;
        z-index: 1;
    }

}


// Inverse
// ========================================================================

@inverse-button-default-background:            transparent;
@inverse-button-default-color:                 @inverse-global-emphasis-color;
@inverse-button-default-hover-background:      transparent;
@inverse-button-default-hover-color:           @inverse-global-emphasis-color;
@inverse-button-default-active-background:     transparent;
@inverse-button-default-active-color:          @inverse-global-emphasis-color;

@inverse-button-text-color:                    @inverse-global-emphasis-color;
@inverse-button-text-hover-color:              @inverse-global-emphasis-color;

.hook-inverse-button-default() { border-color: @inverse-global-color; }
.hook-inverse-button-default-hover() { border-color: @inverse-global-emphasis-color; }
.hook-inverse-button-default-active() { border-color: @inverse-global-emphasis-color; }

.hook-inverse-button-primary() {}
.hook-inverse-button-primary-hover() {}
.hook-inverse-button-primary-active() {}

.hook-inverse-button-secondary() {}
.hook-inverse-button-secondary-hover() {}
.hook-inverse-button-secondary-active() {}

.hook-inverse-button-text() {
    &::before { border-bottom-color: @inverse-global-emphasis-color; }
}
.hook-inverse-button-text-hover() {}
.hook-inverse-button-text-disabled() {}

.hook-inverse-button-link() {}
//
// Component: Section
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-section() {}


// Style modifiers
// ========================================================================

.hook-section-default() {}

.hook-section-muted() {}

.hook-section-primary() {}

.hook-section-secondary() {}


// Miscellaneous
// ========================================================================

.hook-section-misc() {}

//
// Component: Container
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-container-misc() {}
//
// Component: Grid
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-grid-misc() {}
//
// Component: Tile
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-tile() {}


// Style modifiers
// ========================================================================

.hook-tile-default() {}

.hook-tile-muted() {}

.hook-tile-primary() {}

.hook-tile-secondary() {}


// Miscellaneous
// ========================================================================

.hook-tile-misc() {}
//
// Component: Card
//
// ========================================================================


// Variables
// ========================================================================

@card-hover-background:                        @global-background;

@card-default-background:                      @global-background;
@card-default-hover-background:                @card-default-background;

@card-primary-hover-background:                @card-primary-background;

@card-secondary-hover-background:              @card-secondary-background;

//
// New
//

@card-hover-box-shadow:                        @global-large-box-shadow;

@card-default-box-shadow:                      @global-medium-box-shadow;
@card-default-hover-box-shadow:                @global-large-box-shadow;

@card-default-header-border-width:             @global-border-width;
@card-default-header-border:                   @global-border;

@card-default-footer-border-width:             @global-border-width;
@card-default-footer-border:                   @global-border;

@card-primary-box-shadow:                      @global-medium-box-shadow;
@card-primary-hover-box-shadow:                @global-large-box-shadow;

@card-secondary-box-shadow:                    @global-medium-box-shadow;
@card-secondary-hover-box-shadow:              @global-large-box-shadow;


// Component
// ========================================================================

.hook-card() { transition: box-shadow 0.1s ease-in-out; }


// Sections
// ========================================================================

.hook-card-body() {}

.hook-card-header() {}

.hook-card-footer() {}


// Media
// ========================================================================

.hook-card-media() {}

.hook-card-media-top() {}

.hook-card-media-bottom() {}

.hook-card-media-left() {}

.hook-card-media-right() {}


// Title
// ========================================================================

.hook-card-title() {}


// Badge
// ========================================================================

.hook-card-badge() {}


// Hover modifier
// ========================================================================

.hook-card-hover() { box-shadow: @card-hover-box-shadow; }


// Style modifiers
// ========================================================================

.hook-card-default() { box-shadow: @card-default-box-shadow; }

.hook-card-default-title() {}

.hook-card-default-hover() { box-shadow: @card-default-hover-box-shadow; }

.hook-card-default-header() { border-bottom: @card-default-header-border-width solid @card-default-header-border; }

.hook-card-default-footer() { border-top: @card-default-footer-border-width  solid @card-default-footer-border; }

//
// Primary
//

.hook-card-primary() { box-shadow: @card-primary-box-shadow; }

.hook-card-primary-title() {}

.hook-card-primary-hover() { box-shadow: @card-primary-hover-box-shadow; }

//
// Secondary
//

.hook-card-secondary() { box-shadow: @card-secondary-box-shadow; }

.hook-card-secondary-title() {}

.hook-card-secondary-hover() { box-shadow: @card-secondary-hover-box-shadow; }


// Miscellaneous
// ========================================================================

.hook-card-misc() {

    /*
     * Default
     */

    .uk-card-body .uk-nav-default { margin: (-@card-body-padding-vertical + 15px) -@card-body-padding-horizontal; }
    .uk-card-title + .uk-nav-default { margin-top: 0; }

    .uk-card-body .uk-nav-default > li > a,
    .uk-card-body .uk-nav-default .uk-nav-header,
    .uk-card-body .uk-nav-default .uk-nav-divider {
        padding-left: @card-body-padding-horizontal;
        padding-right: @card-body-padding-horizontal;
    }

    .uk-card-body .uk-nav-default .uk-nav-sub { padding-left: @nav-sublist-deeper-padding-left + @card-body-padding-horizontal; }


    /* Desktop and bigger */
    @media (min-width: @breakpoint-large) {

        .uk-card-body .uk-nav-default { margin: (-@card-body-padding-vertical-l + 15px) -@card-body-padding-horizontal-l; }
        .uk-card-title + .uk-nav-default { margin-top: 0; }

        .uk-card-body .uk-nav-default > li > a,
        .uk-card-body .uk-nav-default .uk-nav-header,
        .uk-card-body .uk-nav-default .uk-nav-divider {
            padding-left: @card-body-padding-horizontal-l;
            padding-right: @card-body-padding-horizontal-l;
        }

        .uk-card-body .uk-nav-default .uk-nav-sub { padding-left: @nav-sublist-deeper-padding-left + @card-body-padding-horizontal-l; }

    }

    /*
     * Small
     */

    .uk-card-small .uk-nav-default { margin: (-@card-small-body-padding-vertical + 15px) -@card-small-body-padding-horizontal; }
    .uk-card-small .uk-card-title + .uk-nav-default { margin-top: 0; }

    .uk-card-small .uk-nav-default > li > a,
    .uk-card-small .uk-nav-default .uk-nav-header,
    .uk-card-small .uk-nav-default .uk-nav-divider {
        padding-left: @card-small-body-padding-horizontal;
        padding-right: @card-small-body-padding-horizontal;
    }

    .uk-card-small .uk-nav-default .uk-nav-sub { padding-left: @nav-sublist-deeper-padding-left + @card-small-body-padding-horizontal; }

    /*
     * Large
     */

    /* Desktop and bigger */
    @media (min-width: @breakpoint-large) {

        .uk-card-large .uk-nav-default { margin: (-@card-large-body-padding-vertical-l + 15px) -@card-large-body-padding-horizontal-l; }
        .uk-card-large .uk-card-title + .uk-nav-default { margin-top: 0; }

    }

}
//
// Component: Close
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-close() {
    transition: 0.1s ease-in-out;
    transition-property: color, opacity;
}

.hook-close-hover() {}


// Miscellaneous
// ========================================================================

.hook-close-misc() {}


// Inverse
// ========================================================================

.hook-inverse-close() {}
.hook-inverse-close-hover() {}
//
// Component: Spinner
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-spinner-misc() {}
//
// Component: Marker
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-marker() {
    border-radius: 500px;
}

.hook-marker-hover() {}


// Miscellaneous
// ========================================================================

.hook-marker-misc() {}


// Inverse
// ========================================================================

.hook-inverse-marker() {}
.hook-inverse-marker-hover() {}

//
// Component: Totop
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-totop() { transition: color 0.1s ease-in-out; }

.hook-totop-hover() {}

.hook-totop-active() {}


// Miscellaneous
// ========================================================================

.hook-icon-misc() {}


// Inverse
// ========================================================================

.hook-inverse-totop() {}
.hook-inverse-totop-hover() {}
.hook-inverse-totop-active() {}
//
// Component: Alert
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@alert-close-opacity:                           0.4;
@alert-close-hover-opacity:                     0.8;


// Component
// ========================================================================

.hook-alert() {}


// Close
// ========================================================================

.hook-alert-close() {
    color: inherit;
    opacity: @alert-close-opacity;
}

.hook-alert-close-hover() {
    color: inherit;
    opacity: @alert-close-hover-opacity;
}


// Style modifiers
// ========================================================================

.hook-alert-primary() {}

.hook-alert-success() {}

.hook-alert-warning() {}

.hook-alert-danger() {}


// Miscellaneous
// ========================================================================

.hook-alert-misc() {

    /*
     * Content
     */

    .uk-alert h1,
    .uk-alert h2,
    .uk-alert h3,
    .uk-alert h4,
    .uk-alert h5,
    .uk-alert h6 { color: inherit; }

    .uk-alert a:not([class]) {
        color: inherit;
        text-decoration: underline;
    }

    .uk-alert a:not([class]):hover {
        color: inherit;
        text-decoration: underline;
    }

}
//
// Component: Badge
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-badge() {}

.hook-badge-hover() {}


// Miscellaneous
// ========================================================================

.hook-badge-misc() {}


// Inverse
// ========================================================================

.hook-inverse-badge() {}
.hook-inverse-badge-hover() {}
//
// Component: Label
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@label-border-radius:                           2px;
@label-text-transform:                          uppercase;


// Component
// ========================================================================

.hook-label() {
    border-radius: @label-border-radius;
    text-transform: @label-text-transform;
}


// Color modifiers
// ========================================================================

.hook-label-success() {}

.hook-label-warning() {}

.hook-label-danger() {}


// Miscellaneous
// ========================================================================

.hook-label-misc() {}


// Inverse
// ========================================================================

.hook-inverse-label() {}
//
// Component: Overlay
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-overlay() {}

// Icon
// ========================================================================

.hook-overlay-icon() {}


// Style modifiers
// ========================================================================

.hook-overlay-default() {}

.hook-overlay-primary() {}


// Miscellaneous
// ========================================================================

.hook-overlay-misc() {}
//
// Component: Article
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@article-meta-link-color:                       @article-meta-color;
@article-meta-link-hover-color:                 @global-color;


// Component
// ========================================================================

.hook-article() {}


// Adjacent sibling
// ========================================================================

.hook-article-adjacent() {}


// Title
// ========================================================================

.hook-article-title() {}


// Meta
// ========================================================================

.hook-article-meta() {

    a { color: @article-meta-link-color; }

    a:hover {
        color: @article-meta-link-hover-color;
        text-decoration: none;
    }

}


// Miscellaneous
// ========================================================================

.hook-article-misc() {}


// Inverse
// ========================================================================

.hook-inverse-article-meta() {}
//
// Component: Comment
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@comment-primary-padding:                       @global-gutter;
@comment-primary-background:                    @global-muted-background;


// Component
// ========================================================================

.hook-comment() {}


// Sections
// ========================================================================

.hook-comment-body() {}

.hook-comment-header() {}


// Title
// ========================================================================

.hook-comment-title() {}


// Meta
// ========================================================================

.hook-comment-meta() {}


// Avatar
// ========================================================================

.hook-comment-avatar() {}


// List
// ========================================================================

.hook-comment-list-adjacent() {}

.hook-comment-list-sub() {}

.hook-comment-list-sub-adjacent() {}


// Style modifier
// ========================================================================

.hook-comment-primary() {
    padding: @comment-primary-padding;
    background-color: @comment-primary-background;
}


// Miscellaneous
// ========================================================================

.hook-comment-misc() {}
//
// Component: Search
//
// ========================================================================


// Variables
// ========================================================================

@search-default-background:                         transparent;

//
// New
//

@search-default-border-width:                       @global-border-width;
@search-default-border:                             @global-border;


// Component
// ========================================================================

.hook-search-input() {}


// Default modifiers
// ========================================================================

.hook-search-default-input() { border: @search-default-border-width solid @search-default-border; }


// Navbar modifiers
// ========================================================================

.hook-search-navbar-input() {}

.hook-search-default-input-focus() {}


// Large modifiers
// ========================================================================

.hook-search-large-input() {}


// Toggle
// ========================================================================

.hook-search-toggle() {}

.hook-search-toggle-hover() {}


// Miscellaneous
// ========================================================================

.hook-search-misc() {}


// Inverse
// ========================================================================

@inverse-search-default-background:            transparent;

.hook-inverse-search-default-input() { border-color: @inverse-global-border; }
.hook-inverse-search-default-input-focus() {}

.hook-inverse-search-navbar-input() {}

.hook-inverse-search-large-input() {}

.hook-inverse-search-toggle() {}
.hook-inverse-search-toggle-hover() {}
//
// Component: Nav
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@nav-default-font-size:                         @global-small-font-size;


// Sublists
// ========================================================================

.hook-nav-sub() {}


// Parent icon modifier
// ========================================================================

.hook-nav-parent-icon() {}


// Header
// ========================================================================

.hook-nav-header() {}


// Divider
// ========================================================================

.hook-nav-divider() {}


// Default style modifier
// ========================================================================

.hook-nav-default() { font-size: @nav-default-font-size; }

.hook-nav-default-item() {}

.hook-nav-default-item-hover() {}

.hook-nav-default-item-active() {}

.hook-nav-default-header() {}

.hook-nav-default-divider() {}


// Primary style modifier
// ========================================================================

.hook-nav-primary() {}

.hook-nav-primary-item() {}

.hook-nav-primary-item-hover() {}

.hook-nav-primary-item-active() {}

.hook-nav-primary-header() {}

.hook-nav-primary-divider() {}


// Miscellaneous
// ========================================================================

.hook-nav-misc() {}


// Inverse
// ========================================================================

.hook-inverse-nav-parent-icon() {}

.hook-inverse-nav-default-item() {}
.hook-inverse-nav-default-item-hover() {}
.hook-inverse-nav-default-item-active() {}
.hook-inverse-nav-default-header() {}
.hook-inverse-nav-default-divider() {}

.hook-inverse-nav-primary-item() {}
.hook-inverse-nav-primary-item-hover() {}
.hook-inverse-nav-primary-item-active() {}
.hook-inverse-nav-primary-header() {}
.hook-inverse-nav-primary-divider() {}
//
// Component: Navbar
//
// ========================================================================


// Variables
// ========================================================================

@navbar-nav-item-font-size:                     @global-small-font-size;

@navbar-dropdown-margin:                        15px;
@navbar-dropdown-padding:                       25px;
@navbar-dropdown-background:                    @global-background;
@navbar-dropdown-grid-gutter-horizontal:        (@navbar-dropdown-padding * 2);

//
// New
//

@navbar-nav-item-text-transform:                uppercase;

@navbar-dropdown-nav-font-size:                 @global-small-font-size;

@navbar-dropdown-box-shadow:                    0 5px 12px rgba(0,0,0,0.15);

@navbar-dropbar-box-shadow:                     0 5px 7px rgba(0, 0, 0, 0.05);

@navbar-dropdown-grid-divider-border-width:     @global-border-width;
@navbar-dropdown-grid-divider-border:           @navbar-dropdown-nav-divider-border;


// Component
// ========================================================================

.hook-navbar() {}


// Container
// ========================================================================

.hook-navbar-container() {}


// Nav
// ========================================================================

.hook-navbar-nav-item() {
    text-transform: @navbar-nav-item-text-transform;
    transition: 0.1s ease-in-out;
    transition-property: color, background-color;
}

.hook-navbar-nav-item-hover() {}

.hook-navbar-nav-item-onclick() {}

.hook-navbar-nav-item-active() {}


// Item
// ========================================================================

.hook-navbar-item() {}


// Toggle
// ========================================================================

.hook-navbar-toggle() {}

.hook-navbar-toggle-hover() {}

.hook-navbar-toggle-icon() {}

.hook-navbar-toggle-icon-hover() {}


// Subtitle
// ========================================================================

.hook-navbar-subtitle() {}


// Style modifiers
// ========================================================================

.hook-navbar-transparent() {}

.hook-navbar-sticky() {}


// Dropdown
// ========================================================================

.hook-navbar-dropdown() { box-shadow: @navbar-dropdown-box-shadow; }

.hook-navbar-dropdown-dropbar() { box-shadow: none; }


// Dropdown nav
// ========================================================================

.hook-navbar-dropdown-nav() { font-size: @navbar-dropdown-nav-font-size; }

.hook-navbar-dropdown-nav-item() {}

.hook-navbar-dropdown-nav-item-hover() {}

.hook-navbar-dropdown-nav-header() {}

.hook-navbar-dropdown-nav-divider() {}


// Dropbar
// ========================================================================

.hook-navbar-dropbar() {}

.hook-navbar-dropbar-slide() { box-shadow: @navbar-dropbar-box-shadow; }


// Miscellaneous
// ========================================================================

.hook-navbar-misc() {

    /*
     * Navbar
     */

    .uk-navbar-container > .uk-container .uk-navbar-left {
        margin-left: -@navbar-nav-item-padding-horizontal;
        margin-right: -@navbar-nav-item-padding-horizontal;
    }
    .uk-navbar-container > .uk-container .uk-navbar-right { margin-right: -@navbar-nav-item-padding-horizontal; }

    /*
     * Grid Divider
     */

    .uk-navbar-dropdown-grid > * { position: relative; }

    .uk-navbar-dropdown-grid > :not(.uk-first-column)::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: (@navbar-dropdown-grid-gutter-horizontal / 2);
        border-left: @navbar-dropdown-grid-divider-border-width solid @navbar-dropdown-grid-divider-border;
    }

    /* Vertical */
    .uk-navbar-dropdown-grid.uk-grid-stack > .uk-grid-margin::before {
        content: "";
        position: absolute;
        top: -(@navbar-dropdown-grid-gutter-vertical / 2);
        left: @navbar-dropdown-grid-gutter-horizontal;
        right: 0;
        border-top: @navbar-dropdown-grid-divider-border-width solid @navbar-dropdown-grid-divider-border;
    }

}


// Inverse
// ========================================================================

.hook-inverse-navbar-nav-item() {}
.hook-inverse-navbar-nav-item-hover() {}
.hook-inverse-navbar-nav-item-onclick() {}
.hook-inverse-navbar-nav-item-active() {}

.hook-inverse-navbar-item() {}

.hook-inverse-navbar-toggle() {}
.hook-inverse-navbar-toggle-hover() {}
//
// Component: Subnav
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@subnav-item-font-size:                         @global-small-font-size;
@subnav-item-text-transform:                    uppercase;


// Component
// ========================================================================

.hook-subnav() {}

.hook-subnav-item() {
    font-size: @subnav-item-font-size;
    text-transform: @subnav-item-text-transform;
    transition: 0.1s ease-in-out;
    transition-property: color, background-color;
}

.hook-subnav-item-hover() {}

.hook-subnav-item-active() {}


// Divider modifier
// ========================================================================

.hook-subnav-divider() {}


// Pill modifier
// ========================================================================

.hook-subnav-pill-item() {}

.hook-subnav-pill-item-hover() {}

.hook-subnav-pill-item-onclick() {}

.hook-subnav-pill-item-active() {}


// Disabled
// ========================================================================

.hook-subnav-item-disabled() {}


// Miscellaneous
// ========================================================================

.hook-subnav-misc() {}


// Inverse
// ========================================================================

.hook-inverse-subnav-item() {}
.hook-inverse-subnav-item-hover() {}
.hook-inverse-subnav-item-active() {}

.hook-inverse-subnav-divider() {}

.hook-inverse-subnav-pill-item() {}
.hook-inverse-subnav-pill-item-hover() {}
.hook-inverse-subnav-pill-item-onclick() {}
.hook-inverse-subnav-pill-item-active() {}

.hook-inverse-subnav-item-disabled() {}

//
// Component: Breadcrumb
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-breadcrumb() {}


// Items
// ========================================================================

.hook-breadcrumb-item() {}

.hook-breadcrumb-item-hover() {}

.hook-breadcrumb-item-disabled() {}

.hook-breadcrumb-item-active() {}

.hook-breadcrumb-divider() {}


// Miscellaneous
// ========================================================================

.hook-breadcrumb-misc() {}


// Inverse
// ========================================================================

.hook-inverse-breadcrumb-item() {}
.hook-inverse-breadcrumb-item-hover() {}
.hook-inverse-breadcrumb-item-disabled() {}
.hook-inverse-breadcrumb-item-active() {}

.hook-inverse-breadcrumb-divider() {}
//
// Component: Pagination
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-pagination() {}


// Items
// ========================================================================

.hook-pagination-item() { transition: color 0.1s ease-in-out; }

.hook-pagination-item-hover() {}

.hook-pagination-item-active() {}

.hook-pagination-item-disabled() {}


// Miscellaneous
// ========================================================================

.hook-pagination-misc() {}


// Inverse
// ========================================================================

.hook-inverse-pagination-item() {}
.hook-inverse-pagination-item-hover() {}
.hook-inverse-pagination-item-active() {}
.hook-inverse-pagination-item-disabled() {}
//
// Component: Tab
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@tab-border-width:                              @global-border-width;
@tab-border:                                    @global-border;

@tab-item-border-width:                         @global-border-width;
@tab-item-font-size:                            @global-small-font-size;
@tab-item-text-transform:                       uppercase;

@tab-item-active-border:                        @global-primary-background;


// Component
// ========================================================================

.hook-tab() {

    position: relative;

    &::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: @tab-margin-horizontal;
        right: 0;
        border-bottom: @tab-border-width solid @tab-border;
    }

}


// Items
// ========================================================================

.hook-tab-item() {
    border-bottom: @tab-item-border-width solid transparent;
    font-size: @tab-item-font-size;
    text-transform: @tab-item-text-transform;
    transition: color 0.1s ease-in-out;
}

.hook-tab-item-hover() {}

.hook-tab-item-active() { border-color: @tab-item-active-border; }

.hook-tab-item-disabled() {}


// Position modifiers
// ========================================================================

.hook-tab-bottom() {

    &::before {
        top: 0;
        bottom: auto;
    }

}

.hook-tab-bottom-item() {
    border-top: @tab-item-border-width solid transparent;
    border-bottom: none;
}

.hook-tab-left() {

    &::before {
        top: 0;
        bottom: 0;
        left: auto;
        right: 0;
        border-left: @tab-border-width solid @tab-border;
        border-bottom: none;
    }

}

.hook-tab-left-item() {
    border-right: @tab-item-border-width solid transparent;
    border-bottom: none;
}

.hook-tab-right() {

    &::before {
        top: 0;
        bottom: 0;
        left: 0;
        right: auto;
        border-left: @tab-border-width solid @tab-border;
        border-bottom: none;
    }

}

.hook-tab-right-item() {
    border-left: @tab-item-border-width solid transparent;
    border-bottom: none;
}


// Miscellaneous
// ========================================================================

.hook-tab-misc() {

    .uk-tab .uk-dropdown { margin-left: (@tab-margin-horizontal + @tab-item-padding-horizontal) }

}


// Inverse
// ========================================================================

@inverse-tab-border:                        @inverse-global-border;

.hook-inverse-tab() {

    &::before { border-color: @inverse-tab-border; }

}

.hook-inverse-tab-item() {}
.hook-inverse-tab-item-hover() {}
.hook-inverse-tab-item-active() { border-color: @inverse-global-primary-background; }
.hook-inverse-tab-item-disabled() {}
//
// Component: Slidenav
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-slidenav() { transition: color 0.1s ease-in-out; }

.hook-slidenav-hover() {}

.hook-slidenav-active() {}


// Icon modifier
// ========================================================================

.hook-slidenav-previous() {}

.hook-slidenav-next() {}


// Size modifier
// ========================================================================

.hook-slidenav-large() {}


// Container
// ========================================================================

.hook-slidenav-container() {}


// Miscellaneous
// ========================================================================

.hook-icon-misc() {}


// Inverse
// ========================================================================

.hook-inverse-slidenav() {}
.hook-inverse-slidenav-hover() {}
.hook-inverse-slidenav-active() {}
//
// Component: Dotnav
//
// ========================================================================


// Variables
// ========================================================================

@dotnav-item-background:                             transparent;

//
// New
//

@dotnav-item-border-width:                           1px;

@dotnav-item-border:                                 fade(@global-color, 40%);
@dotnav-item-hover-border:                           transparent;
@dotnav-item-onclick-border:                         transparent;
@dotnav-item-active-border:                          transparent;


// Component
// ========================================================================

.hook-dotnav() {}

.hook-dotnav-item() {
    border: @dotnav-item-border-width solid @dotnav-item-border;
    transition: 0.2s ease-in-out;
    transition-property: background-color, border-color;
}

.hook-dotnav-item-hover() { border-color: @dotnav-item-hover-border; }

.hook-dotnav-item-onclick() { border-color: @dotnav-item-onclick-border; }

.hook-dotnav-item-active() { border-color: @dotnav-item-active-border; }


// Miscellaneous
// ========================================================================

.hook-dotnav-misc() {}


// Inverse
// ========================================================================

@inverse-dotnav-item-background:                     transparent;

.hook-inverse-dotnav() {}
.hook-inverse-dotnav-item() { border-color: fade(@inverse-global-color, 90%); }
.hook-inverse-dotnav-item-hover() { border-color: transparent; }
.hook-inverse-dotnav-item-onclick() { border-color: transparent; }
.hook-inverse-dotnav-item-active() { border-color: transparent; }
//
// Component: Thumbnav
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@thumbnav-item-background:                      fade(@global-background, 40%);
@thumbnav-item-hover-background:                transparent;
@thumbnav-item-active-background:               transparent;


// Component
// ========================================================================

.hook-thumbnav() {}

.hook-thumbnav-item() {

    position: relative;

    &::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: @thumbnav-item-background;
        transition: background-color 0.1s ease-in-out;
    }

}

.hook-thumbnav-item-hover() {
    &::after { background-color: @thumbnav-item-hover-background; }
}

.hook-thumbnav-item-active() {
    &::after { background-color: @thumbnav-item-active-background; }
}


// Miscellaneous
// ========================================================================

.hook-thumbnav-misc() {}


// Inverse
// ========================================================================

.hook-inverse-thumbnav-item() {}
.hook-inverse-thumbnav-item-hover() {}
.hook-inverse-thumbnav-item-active() {}
//
// Component: Accordion
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@accordion-icon-color:                         @global-color;
@internal-accordion-open-image:                url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTMiIHZpZXdCb3g9IjAgMCAxMyAxMyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxyZWN0IGZpbGw9IiMwMDAiIHdpZHRoPSIxMyIgaGVpZ2h0PSIxIiB4PSIwIiB5PSI2IiAvPgo8L3N2Zz4=");
@internal-accordion-close-image:               url("data:image/svg;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTMiIHZpZXdCb3g9IjAgMCAxMyAxMyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxyZWN0IGZpbGw9IiMwMDAiIHdpZHRoPSIxMyIgaGVpZ2h0PSIxIiB4PSIwIiB5PSI2IiAvPgogICAgPHJlY3QgZmlsbD0iIzAwMCIgd2lkdGg9IjEiIGhlaWdodD0iMTMiIHg9IjYiIHk9IjAiIC8+Cjwvc3ZnPg==");

// Component
// ========================================================================

.hook-accordion() {}


// Item
// ========================================================================

.hook-accordion-item() {}


// Title
// ========================================================================

.hook-accordion-title() {

    overflow: hidden;

    &::after {
        content: "";
        width: (@accordion-title-line-height * 1em);
        height: (@accordion-title-line-height * 1em);
        float: right;
        .svg-fill(@internal-accordion-close-image, "#000", @accordion-icon-color);
        background-repeat: no-repeat;
        background-position: 50% 50%;
    }

    .uk-open > &::after { .svg-fill(@internal-accordion-open-image, "#000", @accordion-icon-color); }

}


// Content
// ========================================================================

.hook-accordion-content() {}


// Miscellaneous
// ========================================================================

.hook-accordion-misc() {}

// Inverse
// ========================================================================

.hook-inverse-accordion-item() {}

.hook-inverse-accordion-title() {}

.hook-inverse() {

    .uk-accordion-title::after { .svg-fill(@internal-accordion-close-image, "#000", @inverse-global-color); }

    .uk-open > .uk-accordion-title::after { .svg-fill(@internal-accordion-open-image, "#000", @inverse-global-color); }

}

//
// Component: Drop
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-drop-misc() {}
//
// Component: Dropdown
//
// ========================================================================


// Variables
// ========================================================================

@dropdown-padding:                              25px;
@dropdown-background:                           @global-background;

//
// New
//

@dropdown-nav-font-size:                        @global-small-font-size;

@dropdown-box-shadow:                           0 5px 12px rgba(0,0,0,0.15);


// Component
// ========================================================================

.hook-dropdown() { box-shadow: @dropdown-box-shadow; }


// Nav
// ========================================================================

.hook-dropdown-nav() { font-size: @dropdown-nav-font-size; }

.hook-dropdown-nav-item() {}

.hook-dropdown-nav-item-hover() {}

.hook-dropdown-nav-header() {}

.hook-dropdown-nav-divider() {}


// Miscellaneous
// ========================================================================

.hook-dropdown-misc() {}
//
// Component: Modal
//
// ========================================================================


// Variables
// ========================================================================

@modal-header-background:                       @modal-dialog-background;
@modal-footer-background:                       @modal-dialog-background;

//
// New
//

@modal-header-border-width:                    @global-border-width;
@modal-header-border:                          @global-border;

@modal-footer-border-width:                    @global-border-width;
@modal-footer-border:                          @global-border;

@modal-close-full-padding:                     @global-margin;
@modal-close-full-background:                  @modal-dialog-background;


// Component
// ========================================================================

.hook-modal() {}


// Dialog
// ========================================================================

.hook-modal-dialog() {}


// Full
// ========================================================================

.hook-modal-full() {}


// Sections
// ========================================================================

.hook-modal-header() { border-bottom: @modal-header-border-width solid @modal-header-border; }

.hook-modal-body() {}

.hook-modal-footer() { border-top: @modal-footer-border-width solid @modal-footer-border; }


// Title
// ========================================================================

.hook-modal-title() {}


// Close
// ========================================================================

.hook-modal-close() {}

.hook-modal-close-hover() {}

.hook-modal-close-default() {}

.hook-modal-close-default-hover() {}

.hook-modal-close-outside() {}

.hook-modal-close-outside-hover() {}

.hook-modal-close-full() {
    top: 0;
    right: 0;
    padding: @modal-close-full-padding;
    background: @modal-close-full-background;
}

.hook-modal-close-full-hover() {}


// Miscellaneous
// ========================================================================

.hook-modal-misc() {}
//
// Component: Lightbox
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-lightbox() {}


// Item
// ========================================================================

.hook-lightbox-item() {}


// Toolbar
// ========================================================================

.hook-lightbox-toolbar() {}


// Toolbar Icon
// ========================================================================

.hook-lightbox-toolbar-icon() {}

.hook-lightbox-toolbar-icon-hover() {}


// Button
// ========================================================================

.hook-lightbox-button() {}

.hook-lightbox-button-hover() {}


// Miscellaneous
// ========================================================================

.hook-lightbox-misc() {}
//
// Component: Sticky
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-sticky-misc() {}
//
// Component: Off-canvas
//
// ========================================================================


// Variables
// ========================================================================


// Bar
// ========================================================================

.hook-offcanvas-bar() {}


// Close
// ========================================================================

.hook-offcanvas-close() {}


// Overlay
// ========================================================================

.hook-offcanvas-overlay() {}


// Miscellaneous
// ========================================================================

.hook-offcanvas-misc() {}
//
// Component: Iconnav
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-iconnav() {}

.hook-iconnav-item() {}

.hook-iconnav-item-hover() {}

.hook-iconnav-item-active() {}


// Miscellaneous
// ========================================================================

.hook-iconnav-misc() {}


// Inverse
// ========================================================================

.hook-inverse-iconnav-item() {}
.hook-inverse-iconnav-item-hover() {}
.hook-inverse-iconnav-item-active() {}
//
// Component: Notification
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-notification() {}


// Message
// ========================================================================

.hook-notification-message() {}


// Close
// ========================================================================

.hook-notification-close() {}


// Style modifiers
// ========================================================================

.hook-notification-primary() {}

.hook-notification-success() {}

.hook-notification-warning() {}

.hook-notification-danger() {}


// Miscellaneous
// ========================================================================

.hook-notification-misc() {}
//
// Component: Tooltip
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-tooltip() {}


// Miscellaneous
// ========================================================================

.hook-tooltip-misc() {}
//
// Component: Placeholder
//
// ========================================================================


// Variables
// ========================================================================

@placeholder-background:                        transparent;

//
// New
//

@placeholder-border-width:                      @global-border-width;
@placeholder-border:                            @global-border;


// Component
// ========================================================================

.hook-placeholder() { border: @placeholder-border-width dashed @placeholder-border; }


// Miscellaneous
// ========================================================================

.hook-placeholder-misc() {}

//
// Component: Progress
//
// ========================================================================


// Variables
// ========================================================================

@progress-border-radius:                        500px;


// Component
// ========================================================================

.hook-progress() {
    border-radius: @progress-border-radius;
    overflow: hidden;
}

.hook-progress-bar() {}


// Miscellaneous
// ========================================================================

.hook-progress-misc() {}

//
// Component: Sortable
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-sortable() {}


// Drag
// ========================================================================

.hook-sortable-drag() {}


// Placeholder
// ========================================================================

.hook-sortable-placeholder() {}


// Empty
// ========================================================================

.hook-sortable-empty() {}


// Miscellaneous
// ========================================================================

.hook-sortable-misc() {}

//
// Component: Countdown
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-countdown() {}


// Item
// ========================================================================

.hook-countdown-item() {}


// Number
// ========================================================================

.hook-countdown-number() {}


// Separator
// ========================================================================

.hook-countdown-separator() {}


// Label
// ========================================================================

.hook-countdown-label() {}


// Miscellaneous
// ========================================================================

.hook-countdown-misc() {}


// Inverse
// ========================================================================

.hook-inverse-countdown-item() {}
.hook-inverse-countdown-number() {}
.hook-inverse-countdown-separator() {}
.hook-inverse-countdown-label() {}

//
// Component: Animation
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-animation-misc() {}
//
// Component: Width
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-width-misc() {}
//
// Component: Text
//
// ========================================================================


// Variables
// ========================================================================

//
// New
//

@text-meta-link-color:                          @text-meta-color;
@text-meta-link-hover-color:                    @global-color;


// Style modifiers
// ========================================================================

.hook-text-lead() {}

.hook-text-meta() {

    a { color: @text-meta-link-color; }

    a:hover {
        color: @text-meta-link-hover-color;
        text-decoration: none;
    }

}


// Size modifiers
// ========================================================================

.hook-text-small() {}

.hook-text-large() {}


// Background modifier
// ========================================================================

.hook-text-background() {}


// Miscellaneous
// ========================================================================

.hook-text-misc() {}


// Inverse
// ========================================================================

.hook-inverse-text-lead() {}
.hook-inverse-text-meta() {}

//
// Component: Column
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-column-misc() {}
//
// Component: Background
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-background-misc() {}
//
// Component: Align
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-align-misc() {}
//
// Component: Utility
//
// ========================================================================


// Variables
// ========================================================================


// Panel
// ========================================================================

.hook-panel-scrollable() {}


// Box-shadow bottom
// ========================================================================

.hook-box-shadow-bottom() {}


// Drop cap
// ========================================================================

.hook-dropcap() {
    // Prevent line wrap
    margin-bottom: -2px;
}


// Leader
// ========================================================================

.hook-leader() {}


// Logo
// ========================================================================

.hook-logo() {}

.hook-logo-hover() {}


// Miscellaneous
// ========================================================================

.hook-utility-misc() {}


// Inverse
// ========================================================================

.hook-inverse-dropcap() {}

.hook-inverse-leader() {}

.hook-inverse-logo() {}
.hook-inverse-logo-hover() {}
//
// Component: Margin
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-margin-misc() {}
//
// Component: Padding
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-padding-misc() {}
//
// Component: Position
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-position-misc() {}
//
// Component: Transition
//
// ========================================================================


// Variables
// ========================================================================


// Miscellaneous
// ========================================================================

.hook-transition-misc() {}
//
// Component: Inverse
//
// ========================================================================


// Variables
// ========================================================================


// Component
// ========================================================================

.hook-inverse() {}
</style>

<script>
/*! UIkit 3.0.0-beta.35 | http://www.getuikit.com | (c) 2014 - 2017 YOOtheme | MIT License */

!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define("uikit",e):t.UIkit=e()}(this,function(){"use strict";function t(t){this.state=We,this.value=void 0,this.deferred=[];var e=this;try{t(function(t){e.resolve(t)},function(t){e.reject(t)})}catch(t){e.reject(t)}}function e(t,e){return function(i){var n=arguments.length;return n?n>1?t.apply(e,arguments):t.call(e,i):t.call(e)}}function i(t,e){return Ue.call(t,e)}function n(t){return t.replace(Je,function(t,e){return e?e.toUpperCase():""})}function o(t){return t.replace(Ge,"$1-$2").toLowerCase()}function s(t){return t.replace(Ze,r)}function r(t,e){return e?e.toUpperCase():""}function a(t){return t.length?r(null,t.charAt(0))+t.slice(1):""}function l(t,e){return Qe.call(t,e)}function h(t,e){return ti.call(t,e)}function c(t,e){return t&&(v(t)?ii:ni).call(t,e)}function u(t){return"function"==typeof t}function f(t){return null!==t&&"object"==typeof t}function d(t){return f(t)&&Object.getPrototypeOf(t)===Object.prototype}function p(t){return f(t)&&t===t.window}function m(t){return f(t)&&9===t.nodeType}function g(t){return"boolean"==typeof t}function v(t){return"string"==typeof t}function w(t){return"number"==typeof t}function y(t){return w(t)||v(t)&&!isNaN(t-parseFloat(t))}function b(t){return void 0===t}function x(t){return g(t)?t:"true"===t||"1"===t||""===t||"false"!==t&&"0"!==t&&t}function k(t){var e=Number(t);return!isNaN(e)&&e}function _(t){return parseFloat(t)||0}function T(t){return oi(t)?t:v(t)?t.split(/,(?![^(]*\))/).map(function(t){return y(t)?k(t):x(t.trim())}):[t]}function E(t){if(v(t))if("@"===t[0]){var e="media-"+t.substr(1);t=si[e]||(si[e]=_(Dt(e)))}else if(isNaN(t))return t;return!(!t||isNaN(t))&&"(min-width: "+t+"px)"}function C(t,e,i){return t===Boolean?x(e):t===Number?k(e):"query"===t?at(e,i):"list"===t?T(e):"media"===t?E(e):t?t(e):e}function A(t){return t?h(t,"ms")?_(t):1e3*_(t):0}function S(t,e,i){return t.replace(new RegExp(e+"|"+i,"mg"),function(t){return t===e?i:e})}function I(t,e){for(var i in t)if(!1===e.call(t[i],t[i],i))break}function N(t,e,i){return void 0===e&&(e=0),void 0===i&&(i=1),Math.min(Math.max(t,e),i)}function D(){}function O(t,e){return t.left<=e.right&&e.left<=t.right&&t.top<=e.bottom&&e.top<=t.bottom}function B(t,e){return O({top:t.y,bottom:t.y,left:t.x,right:t.x},e)}function P(t,e){return new Xe(function(i,n){var o=ri({data:null,method:"GET",headers:{},xhr:new XMLHttpRequest,beforeSend:D,responseType:""},e),s=o.xhr;o.beforeSend(o);for(var r in o)if(r in s)try{s[r]=o[r]}catch(t){}s.open(o.method.toUpperCase(),t);for(var a in o.headers)s.setRequestHeader(a,o.headers[a]);Yt(s,"load",function(){0===s.status||s.status>=200&&s.status<300||304===s.status?i(s):n(ri(Error(s.statusText),{xhr:s,status:s.status}))}),Yt(s,"error",function(){return n(ri(Error("Network Error"),{xhr:s}))}),Yt(s,"timeout",function(){return n(ri(Error("Network Timeout"),{xhr:s}))}),s.send(o.data)})}function M(){return"complete"===li.readyState||"loading"!==li.readyState&&!hi.doScroll}function H(t){if(M())t();else var e=function(){i(),n(),t()},i=Yt(li,"DOMContentLoaded",e),n=Yt(ai,"load",e)}function z(t,e,i,n){return void 0===i&&(i=400),void 0===n&&(n="linear"),Xe.all(kt(t).map(function(t){return new Xe(function(o,s){for(var r in e){var a=St(t,r);""===a&&St(t,r,a)}var l=setTimeout(function(){return Ut(t,Vi)},i);qt(t,Vi+" "+ui,function(e){var i=e.type;clearTimeout(l),Mt(t,"uk-transition"),St(t,"transition",""),i===ui?s():o()},!1,function(e){var i=e.target;return t===i}),Pt(t,"uk-transition"),St(t,ri({transition:"all "+i+"ms "+n},e))})}))}function L(t,e,i,n,o){var s=arguments;return void 0===i&&(i=200),Xe.all(kt(t).map(function(t){return new Xe(function(r,a){function h(){St(t,"animationDuration",""),Ht(t,pi+"\\S*")}if(Lt(t,mi))Mi(function(){return Xe.resolve().then(function(){return L.apply(null,s).then(r,a)})});else{var c=e+" "+pi+(o?"leave":"enter");l(e,pi)&&(n&&(c+=" "+pi+n),o&&(c+=" "+pi+"reverse")),h(),qt(t,(Ui||"animationend")+" "+di,function(e){var i=!1;e.type===di?(a(),h()):(r(),Xe.resolve().then(function(){i=!0,h()})),Mi(function(){i||(Pt(t,mi),Mi(function(){return Mt(t,mi)}))})},!1,function(e){var i=e.target;return t===i}),St(t,"animationDuration",i+"ms"),Pt(t,c),Ui||Mi(function(){return vi.cancel(t)})}})}))}function j(t,e,i){return void 0===e&&(e=0),void 0===i&&(i=0),O(xt(t).getBoundingClientRect(),{top:e,left:i,bottom:e+sn(ai),right:i+rn(ai)})}function W(t){var e=0;do{e+=t.offsetTop}while(t=t.offsetParent);return e}function F(t,e,i){void 0===i&&(i=0);var n=(e=kt(e)).length;return(t=(y(t)?k(t):"next"===t?i+1:"previous"===t?i-1:nt(e,t))%n)<0?t+n:t}function R(t){return wi[xt(t).tagName.toLowerCase()]}function Y(t){return kt(t).some(function(t){return t.offsetHeight})}function V(t){return kt(t).some(function(t){return mt(t,bi)})}function q(t){return t=xt(t),t.innerHTML="",t}function U(t,e){return t=xt(t),b(e)?t.innerHTML:X(t.hasChildNodes()?q(t):t,e)}function X(t,e){return t=xt(t),Z(e,function(e){return t.appendChild(e)})}function J(t,e){return t=xt(t),Z(e,function(e){return t.parentNode.insertBefore(e,t)})}function G(t,e){return t=xt(t),Z(e,function(e){return t.nextSibling?J(t.nextSibling,e):X(t.parentNode,e)})}function Z(t,e){return"length"in(t=v(t)?it(t):t)?kt(t).map(e):e(t)}function K(t){kt(t).map(function(t){return t.parentNode&&t.parentNode.removeChild(t)})}function Q(t,e){for(e=xt(J(t,e));e.firstChild;)e=e.firstChild;return X(e,t),e}function tt(t,e){return kt(kt(t).map(function(t){return t.hasChildNodes?Q(kt(t.childNodes),e):X(t,e)}))}function et(t){kt(t).map(function(t){return t.parentNode}).filter(function(t,e,i){return i.indexOf(t)===e}).forEach(function(t){J(t,t.childNodes),K(t)})}function it(t){var e;if(e=ki.exec(t))return li.createElement(e[1]);var i=li.createElement("div");return xi.test(t)?i.insertAdjacentHTML("beforeend",t.trim()):i.textContent=t,i.childNodes.length>1?kt(i.childNodes):i.firstChild}function nt(t,e){return e?kt(t).indexOf(xt(e)):kt((t=xt(t))&&t.parentNode.children).indexOf(t)}function ot(t,e){return v(t)?rt(t)?xt(it(t)):ht(t,e):xt(t)}function st(t,e){return v(t)?rt(t)?kt(it(t)):ct(t,e):kt(t)}function rt(t){return"<"===t[0]||t.match(/^\s*</)}function at(t,e){return ot(t,pt(t)?e:li)}function lt(t,e){return st(t,pt(t)?e:li)}function ht(t,e){return xt(ut(t,e,"querySelector"))}function ct(t,e){return kt(ut(t,e,"querySelectorAll"))}function ut(t,e,i){if(void 0===e&&(e=li),!t||!v(t))return null;var n;pt(t=t.replace(Ti,"$1 *"))&&(n=[],t=t.split(",").map(function(t,i){var o=e;if("!"===(t=t.trim())[0]){var s=t.substr(1).trim().split(" ");o=gt(e.parentNode,s[0]),t=s.slice(1).join(" ")}return o?(o.id||(o.id="uk-"+Date.now()+i,n.push(function(){return Et(o,"id")})),"#"+$t(o.id)+" "+t):null}).filter(Boolean).join(","),e=li);try{return e[i](t)}catch(t){return null}finally{n&&n.forEach(function(t){return t()})}}function ft(t,e){return st(t).filter(function(t){return mt(t,e)})}function dt(t,e){return v(e)?mt(t,e)||gt(t,e):t===e||xt(e).contains(xt(t))}function pt(t){return v(t)&&t.match(_i)}function mt(t,e){return kt(t).some(function(t){return Ci.call(t,e)})}function gt(t,e){return l(e,">")&&(e=e.slice(1)),yt(t)?t.parentNode&&Ai.call(t,e):kt(t).map(function(t){return t.parentNode&&Ai.call(t,e)}).filter(Boolean)}function vt(t,e){for(var i=[],n=xt(t).parentNode;n&&1===n.nodeType;)mt(n,e)&&i.push(n),n=n.parentNode;return i}function wt(t){return f(t)&&!!t.jquery}function yt(t){return t instanceof Node||f(t)&&1===t.nodeType}function bt(t){return t instanceof NodeList||t instanceof HTMLCollection}function xt(t){return yt(t)||p(t)||m(t)?t:bt(t)||wt(t)?t[0]:oi(t)?xt(t[0]):null}function kt(t){return yt(t)?[t]:bt(t)?$i.slice.call(t):oi(t)?t.map(xt).filter(Boolean):wt(t)?t.toArray():[]}function $t(t){return v(t)?Si.call(null,t):""}function _t(t,e,i){if(f(e))for(var n in e)_t(t,n,e[n]);else{if(b(i))return(t=xt(t))&&t.getAttribute(e);kt(t).forEach(function(t){u(i)&&(i=i.call(t,_t(t,e))),null===i?Et(t,e):t.setAttribute(e,i)})}}function Tt(t,e){return kt(t).some(function(t){return t.hasAttribute(e)})}function Et(t,e){t=kt(t),e.split(" ").forEach(function(e){return t.forEach(function(t){return t.removeAttribute(e)})})}function Ct(t,e,i,n){_t(t,e,function(t){return t?t.replace(i,n):t})}function At(t,e){for(var i=0,n=[e,"data-"+e];i<n.length;i++)if(Tt(t,n[i]))return _t(t,n[i])}function St(t,e,i){return kt(t).map(function(t){if(v(e)){if(e=Ot(e),b(i))return Nt(t,e);i||0===i?t.style[e]=y(i)&&!Ii[e]?i+"px":i:t.style.removeProperty(e)}else{if(oi(e)){var n=It(t);return e.reduce(function(t,e){return t[e]=Ot(n[e]),t},{})}f(e)&&I(e,function(e,i){return St(t,i,e)})}return t})[0]}function It(t,e){return(t=xt(t)).ownerDocument.defaultView.getComputedStyle(t,e)}function Nt(t,e,i){return It(t,i)[e]}function Dt(t){if(!(t in Ni)){var e=X(hi,li.createElement("div"));Pt(e,"var-"+t);try{Ni[t]=Nt(e,"content",":before").replace(/^["'](.*)["']$/,"$1"),Ni[t]=JSON.parse(Ni[t])}catch(t){}hi.removeChild(e)}return Ni[t]}function Ot(t){var e=Di[t];return e||(e=Di[t]=Bt(t)||t),e}function Bt(t){if((t=o(t))in Bi)return t;for(var e,i=Oi.length;i--;)if((e="-"+Oi[i]+t)in Bi)return e}function Pt(t){for(var e=[],i=arguments.length-1;i-- >0;)e[i]=arguments[i+1];Wt(t,e,"add")}function Mt(t){for(var e=[],i=arguments.length-1;i-- >0;)e[i]=arguments[i+1];Wt(t,e,"remove")}function Ht(t,e){Ct(t,"class",new RegExp("(^|\\s)"+e+"(?!\\S)","g"),"")}function zt(t){for(var e=[],i=arguments.length-1;i-- >0;)e[i]=arguments[i+1];e[0]&&Mt(t,e[0]),e[1]&&Pt(t,e[1])}function Lt(t,e){return Ye&&kt(t).some(function(t){return t.classList.contains(e)})}function jt(t){for(var e=[],i=arguments.length-1;i-- >0;)e[i]=arguments[i+1];if(Ye&&e.length){var n=v((e=Ft(e))[e.length-1])?void 0:e.pop();kt(t).forEach(function(t){for(var i=t.classList,o=0;o<e.length;o++)qe?i.toggle(e[o],n):i[(b(n)?!i.contains(e[o]):n)?"add":"remove"](e[o])})}}function Wt(t,e,i){e=Ft(e).filter(function(t){return t}),Ye&&e.length&&kt(t).forEach(function(t){var n=t.classList;Ve?n[i].apply(n,e):e.forEach(function(t){return n[i](t)})})}function Ft(t){return t.reduce(function(t,e){return t.push.apply(t,v(e)&&c(e," ")?e.trim().split(" "):[e]),t},[])}function Rt(t,e){var i,o=n(t),s=n(e).toLowerCase(),r=n(e),a=li.body||hi,l=(i={},i[t]=s,i["Webkit"+o]="webkit"+r,i["Moz"+o]=s,i["o"+o]="o"+r+" o"+s,i);for(t in l)if(void 0!==a.style[t])return l[t]}function Yt(){for(var t=[],e=arguments.length;e--;)t[e]=arguments[e];var i=Jt(t),n=i[0],o=i[1],s=i[2],r=i[3],a=i[4];return n=Qt(n),s&&(r=Gt(n,s,r)),r.length>1&&(r=Zt(r)),o.split(" ").forEach(function(t){return n.addEventListener(t,r,a)}),function(){return Vt(n,o,r,a)}}function Vt(t,e,i,n){void 0===n&&(n=!1),e.split(" ").forEach(function(e){return Qt(t).removeEventListener(e,i,n)})}function qt(){for(var t=[],e=arguments.length;e--;)t[e]=arguments[e];var i=Jt(t),n=i[0],o=i[1],s=i[2],r=i[3],a=i[4],l=i[5],h=Yt(n,o,s,function(t){var e=!l||l(t);e&&(h(),r(t,e))},a);return h}function Ut(t,e,i){return te(t).reduce(function(t,n){return t&&n.dispatchEvent(Xt(e,!0,!0,i))},!0)}function Xt(t,e,i,n){if(void 0===e&&(e=!0),void 0===i&&(i=!1),v(t)){var o=li.createEvent("CustomEvent");o.initCustomEvent(t,e,i,n),t=o}return t}function Jt(t){return v(t[0])&&(t[0]=ot(t[0])),u(t[2])&&t.splice(2,0,!1),t}function Gt(t,e,i){var n=this;return function(o){var s=o.target,r=">"===e[0]?st(e,t).filter(function(t){return dt(s,t)})[0]:gt(s,e);r&&(o.delegate=t,o.current=r,i.call(n,o))}}function Zt(t){return function(e){return oi(e.detail)?t.apply(t,[e].concat(e.detail)):t(e)}}function Kt(t){return"EventTarget"in ai?t instanceof EventTarget:"addEventListener"in t}function Qt(t){return Kt(t)?t:xt(t)}function te(t){return Kt(t)?[t]:oi(t)?t.map(Qt).filter(Boolean):kt(t)}function ee(){Xi.scheduled||(Xi.scheduled=!0,Mi(Xi.flush.bind(Xi)))}function ie(t){for(var e;e=t.shift();)e()}function ne(t,e){var i=t.indexOf(e);return!!~i&&!!t.splice(i,1)}function oe(){}function se(t,e){return(e.y-t.y)/(e.x-t.x)}function re(t,e){function n(i){s[i]=(Ji[i]||Gi)(t[i],e[i])}var o,s={};if(e.mixins)for(var r=0,a=e.mixins.length;r<a;r++)t=re(t,e.mixins[r]);for(o in t)n(o);for(o in e)i(t,o)||n(o);return s}function ae(t,e){try{t.contentWindow.postMessage(JSON.stringify(ri({event:"command"},e)),"*")}catch(t){}}function le(t){return new Xe(function(e){qt(ai,"message",function(t,i){return e(i)},!1,function(e){var i=e.data;if(i&&v(i)){try{i=JSON.parse(i)}catch(t){return}return i&&t(i)}})})}function he(t,e,i,n,o,s,r,a){i=we(i),n=we(n);var l={element:i,target:n};if(!t||!e)return l;var h=ue(t),u=ue(e),f=u;return ve(f,i,h,-1),ve(f,n,u,1),o=ye(o,h.width,h.height),s=ye(s,u.width,u.height),o.x+=s.x,o.y+=s.y,f.left+=o.x,f.top+=o.y,a=ue(a||ge(t)),r&&I(on,function(t,e){function s(t,i){var n=f[p]+t+i-2*o[d];if(n>=a[p]&&n+h[e]<=a[m])return f[p]=n,["element","target"].forEach(function(i){l[i][d]=t?l[i][d]===on[e][1]?on[e][2]:on[e][1]:l[i][d]}),!0}var d=t[0],p=t[1],m=t[2];if(!0===r||c(r,d)){var g=i[d]===p?-h[e]:i[d]===m?h[e]:0,v=n[d]===p?u[e]:n[d]===m?-u[e]:0;if(f[p]<a[p]||f[p]+h[e]>a[m]){var w=h[e]/2,y="center"===n[d]?-u[e]/2:0;"center"===i[d]&&(s(w,y)||s(-w,-y))||s(g,v)}}}),ce(t,f),l}function ce(t,e){t=xt(t);{if(!e)return ue(t);var i=ce(t),n=St(t,"position");["left","top"].forEach(function(o){if(o in e){var s=St(t,o);t.style[o]=e[o]-i[o]+_("absolute"===n&&"auto"===s?fe(t)[o]:s)+"px"}})}}function ue(t){var e=ge(t=xt(t)),i=e.pageYOffset,n=e.pageXOffset;if(p(t)){var o=t.innerHeight,s=t.innerWidth;return{top:i,left:n,height:o,width:s,bottom:i+o,right:n+s}}var r=!1;Y(t)||(r=t.style.display,t.style.display="block");var a=t.getBoundingClientRect();return!1!==r&&(t.style.display=r),{height:a.height,width:a.width,top:a.top+i,left:a.left+n,bottom:a.bottom+i,right:a.right+n}}function fe(t){var e=de(t=xt(t)),i=e===ke(t)?{top:0,left:0}:ce(e);return["top","left"].reduce(function(n,o){var s=a(o);return n[o]-=i[o]+(_(St(t,"margin"+s))||0)+(_(St(e,"border"+s+"Width"))||0),n},ce(t))}function de(t){for(var e=xt(t).offsetParent;e&&"static"===St(e,"position");)e=e.offsetParent;return e||ke(t)}function pe(t){var e=a(t);return function(i,n){if(i=xt(i),b(n)){if(p(i))return i["inner"+e];if(m(i)){var o=i.documentElement;return Math.max(o.offsetHeight,o.scrollHeight)}return n=St(i,t),n="auto"===n?i["offset"+e]:_(n)||0,me(t,i,n)}St(i,t,n||0===n?me(t,i,n)+"px":"")}}function me(t,e,i){return"border-box"===St(e,"boxSizing")?on[t].slice(1).map(a).reduce(function(t,i){return t-_(St(e,"padding"+i))-_(St(e,"border"+i+"Width"))},i):i}function ge(t){return p(t)?t:xe(t).defaultView}function ve(t,e,i,n){I(on,function(o,s){var r=o[0],a=o[1],l=o[2];e[r]===l?t[a]+=i[s]*n:"center"===e[r]&&(t[a]+=i[s]*n/2)})}function we(t){var e=/left|center|right/,i=/top|center|bottom/;return 1===(t=(t||"").split(" ")).length&&(t=e.test(t[0])?t.concat(["center"]):i.test(t[0])?["center"].concat(t):["center","center"]),{x:e.test(t[0])?t[0]:"center",y:i.test(t[1])?t[1]:"center"}}function ye(t,e,i){var n=(t||"").split(" "),o=n[0],s=n[1];return{x:o?_(o)*(h(o,"%")?e/100:1):0,y:s?_(s)*(h(s,"%")?i/100:1):0}}function be(t){switch(t){case"left":return"right";case"right":return"left";case"top":return"bottom";case"bottom":return"top";default:return t}}function xe(t){return xt(t).ownerDocument}function ke(t){return xe(t).documentElement}function $e(t){var e=t.x1,i=t.x2,n=t.y1,o=t.y2;return Math.abs(e-i)>=Math.abs(n-o)?e-i>0?"Left":"Right":n-o>0?"Up":"Down"}function _e(){Qi&&clearTimeout(Qi),tn&&clearTimeout(tn),en&&clearTimeout(en),Qi=tn=en=null,an={}}function Te(t){return ln||"touch"===t.pointerType}function Ee(t){var e=t.touches,i=t.changedTouches,n=e&&e[0]||i&&i[0]||t;return{x:n.pageX,y:n.pageY}}function Ce(){fn||(fn=[Yt(hi,"click",function(t){var e=t.target,i=t.defaultPrevented;un&&un.bgClose&&!i&&!dt(e,un.panel)&&un.hide()}),Yt(li,"keydown",function(t){27===t.keyCode&&un&&un.escClose&&(t.preventDefault(),un.hide())})])}function Ae(){fn&&fn.forEach(function(t){return t()}),fn=null}function Se(t){function e(t){var e=t-Date.now();return{total:e,seconds:e/1e3%60,minutes:e/1e3/60%60,hours:e/1e3/60/60%24,days:e/1e3/60/60/24}}if(!Se.installed){var i=t.util,n=i.$,o=i.doc,s=i.empty,r=i.html;t.component("countdown",{mixins:[t.mixin.class],attrs:!0,props:{date:String,clsWrapper:String},defaults:{date:"",clsWrapper:".uk-countdown-%unit%"},computed:{date:function(t){var e=t.date;return Date.parse(e)},days:function(t,e){var i=t.clsWrapper;return n(i.replace("%unit%","days"),e)},hours:function(t,e){var i=t.clsWrapper;return n(i.replace("%unit%","hours"),e)},minutes:function(t,e){var i=t.clsWrapper;return n(i.replace("%unit%","minutes"),e)},seconds:function(t,e){var i=t.clsWrapper;return n(i.replace("%unit%","seconds"),e)},units:function(){var t=this;return["days","hours","minutes","seconds"].filter(function(e){return t[e]})}},connected:function(){this.start()},disconnected:function(){var t=this;this.stop(),this.units.forEach(function(e){return s(t[e])})},events:[{name:"visibilitychange",el:o,handler:function(){o.hidden?this.stop():this.start()}}],update:{write:function(){var t=this,i=e(this.date);i.total<=0&&(this.stop(),i.days=i.hours=i.minutes=i.seconds=0),this.units.forEach(function(e){var n=String(Math.floor(i[e]));n=n.length<2?"0"+n:n;var o=t[e];o.textContent!==n&&((n=n.split("")).length!==o.children.length&&r(o,n.map(function(){return"<span></span>"}).join("")),n.forEach(function(t,e){return o.children[e].textContent=t}))})}},methods:{start:function(){var t=this;this.stop(),this.date&&this.units.length&&(this.$emit(),this.timer=setInterval(function(){return t.$emit()},1e3))},stop:function(){this.timer&&(clearInterval(this.timer),this.timer=null)}}})}}function Ie(t){function e(t,e){return t.sort(function(t,i){return t[e]>i[e]?1:i[e]>t[e]?-1:0})}if(!Ie.installed){var i=t.util,n=i.$$,o=i.addClass,s=i.css,r=i.scrolledOver,a=i.toFloat,l=i.toNodes;t.component("grid-parallax",t.components.grid.extend({props:{target:String,translate:Number},defaults:{target:!1,translate:150},computed:{translate:function(t){var e=t.translate;return Math.abs(e)},items:function(t,e){var i=t.target;return i?n(i,e):l(e.children)}},init:function(){o(this.$el,"uk-grid")},disconnected:function(){this.reset(),s(this.$el,"marginBottom","")},update:[{read:function(){this.columns=this.rows&&this.rows[0]&&this.rows[0].length||0,this.rows=this.rows&&this.rows.map(function(t){return e(t,"offsetLeft")})},write:function(){s(this.$el,"marginBottom",this.columns>1?this.translate+a(s(s(this.$el,"marginBottom",""),"marginBottom")):"")},events:["load","resize"]},{read:function(){this.scrolled=r(this.$el)*this.translate},write:function(){var t=this;if(!this.rows||1===this.columns||!this.scrolled)return this.reset();this.rows.forEach(function(e){return e.forEach(function(e,i){return s(e,"transform","translateY("+(i%2?t.scrolled:t.scrolled/8)+"px)")})})},events:["scroll","load","resize"]}],methods:{reset:function(){s(this.items,"transform","")}}})),t.component("grid-parallax").options.update.unshift({read:function(){this.reset()},events:["load","resize"]})}}function Ne(t){return void 0===t&&(t=0),"translate("+t+(t?"%":"")+", 0)"}function De(t){return"scale3d("+t+", "+t+", 1)"}function Oe(t){function e(t,e,n,o,s,r){var a=t.percent,l=t.translate,h=(0,t.show)(s);return{animation:t,dir:s,current:n,next:o,show:function(t,a,l){var c=this;void 0===a&&(a=0);var u=l?"linear":e;return t-=Math.round(t*a),this.translate(a),i(o,"itemin",{percent:a,duration:t,ease:u,dir:s}),n&&i(n,"itemout",{percent:1-a,duration:t,ease:u,dir:s}),I.all([B.start(o,h[1],t,u),n&&B.start(n,h[0],t,u)]).then(function(){c.reset(),r()},$)},stop:function(){return B.stop([o,n])},cancel:function(){B.cancel([o,n])},reset:function(){for(var t in h[0])d([o,n],t,"")},forward:function(t){var e=this.percent();B.cancel([o,n]),this.show(t,e,!0)},translate:function(t){var e=l(t,s);d(o,e[1]),n&&d(n,e[0]),i(o,"itemtranslatein",{percent:t,dir:s}),n&&i(n,"itemtranslateout",{percent:1-t,dir:s})},percent:function(){return a(n,o,s)}}}function i(t,e,i){P(t,f(e,!1,!1,i))}function n(t){return~~t}function o(t,e){return"next"===t?1:"previous"===t?-1:t<e?-1:1}function s(t){return.5*t+300}function r(t){return!t.children.length&&t.childNodes.length}if(!Oe.installed){var a=t.util,l=a.$$,h=a.$,c=a.addClass,u=a.assign,f=a.createEvent,d=a.css,p=a.data,m=a.doc,g=a.endsWith,v=a.fastdom,w=a.getIndex,y=a.getPos,b=a.hasClass,x=a.index,k=a.isTouch,$=a.noop,_=a.off,T=a.on,E=a.pointerDown,C=a.pointerMove,A=a.pointerUp,S=a.preventClick,I=a.Promise,N=a.removeClass,D=a.toggleClass,O=a.toNodes,B=a.Transition,P=a.trigger,M=a.win,H=Math.abs;t.mixin.slideshow={attrs:!0,props:{autoplay:Boolean,autoplayInterval:Number,pauseOnHover:Boolean,animation:String,easing:String,velocity:Number},defaults:{autoplay:!1,autoplayInterval:7e3,pauseOnHover:!0,animation:"slide",easing:"ease",velocity:1,index:0,stack:[],threshold:10,percent:0,clsActive:"uk-active",clsActivated:"uk-transition-active",initialAnimation:!1,Animations:Xn(t)},computed:{list:function(t,e){var i=t.selList;return h(i,e)},slides:function(){return O(this.list.children)},animation:function(t){var e=t.animation,i=t.Animations;return u(e in i?i[e]:i.slide,{name:e})},duration:function(t,e){var i=t.velocity;return s(e.offsetWidth/i)}},init:function(){var t=this;["start","move","end"].forEach(function(e){var i=t[e];t[e]=function(e){var n=y(e).x;t.prevPos=n!==t.pos?t.pos:t.prevPos,t.pos=n,i(e)}})},connected:function(){this.startAutoplay()},disconnected:function(){this.stopAutoplay()},update:[{read:function(){delete this._computeds.duration},events:["load","resize"]}],events:[{name:"click",delegate:function(){return"["+this.attrItem+"],[data-"+this.attrItem+"]"},handler:function(t){t.preventDefault(),t.current.blur(),this.show(p(t.current,this.attrItem))}},{name:E,delegate:function(){return this.selList+" > *"},handler:function(t){!k(t)&&r(t.target)||this.start(t)}},{name:"visibilitychange",el:m,handler:function(){m.hidden?this.stopAutoplay():this.startAutoplay()}},{name:E,handler:"stopAutoplay"},{name:"mouseenter",filter:function(){return this.autoplay},handler:function(){this.isHovering=!0}},{name:"mouseleave",filter:function(){return this.autoplay},handler:function(){this.isHovering=!1}},{name:"beforeitemshow",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){var e=t.target;c(e,this.clsActive)}},{name:"itemshown",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){var e=t.target;c(e,this.clsActivated)}},{name:"itemshow itemhide",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){var e=t.type,i=t.target;D(l("["+this.attrItem+'="'+x(i)+'"],[data-'+this.attrItem+'="'+x(i)+'"]',this.$el),this.clsActive,g(e,"show"))}},{name:"itemhidden",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){var e=t.target;N(e,this.clsActive),N(e,this.clsActivated)}},{name:"itemshow itemhide itemshown itemhidden",self:!0,delegate:function(){return this.selList+" > *"},handler:function(e){var i=e.target;t.update(null,i)}},{name:"dragstart",handler:function(t){t.preventDefault()}}],methods:{start:function(t){if(!(t.button>0||this.slides.length<2||this._animation&&this._animation.animation!==this.animation)){var e=0;if(this.stack.length){var i=this._animation,n=i.dir,o=i.percent,s=i.cancel,r=i.translate;e=o()*n,this.percent=H(e)*-n,this.stack.splice(0,this.stack.length),s(),r(H(e)),this.index=this.getIndex(this.index-n),this.dragging=!0}this.unbindMove=T(m,C,this.move,{capture:!0,passive:!1}),T(M,"scroll",this.unbindMove),T(m,A,this.end,!0),this.drag=this.pos+this.$el.offsetWidth*e}},move:function(i){var o=this,s=this.pos-this.drag;if(!(this.prevPos===this.pos||!this.dragging&&H(s)<this.threshold)){i.cancelable&&i.preventDefault(),this.dragging=!0;var r=s/this.$el.offsetWidth;if(this.percent!==r){var a=this.getIndex(this.index-n(this.percent)),l=this.getIndex(this.index-n(r)),h=this.slides[l],c=r<0?1:-1,u=w(r<0?"next":"previous",this.slides,l),f=this.slides[u];this.slides.forEach(function(t,e){return D(t,o.clsActive,e===l||e===u)}),this._animation&&this._animation.reset(),l!==a&&(P(this.slides[a],"itemhide",[this]),P(h,"itemshow",[this])),this._animation=new e(this.animation,this.easing,h,f,c,$),this._animation.translate(H(r%1)),this.percent=r,t.update(null,h),t.update(null,f)}}},end:function(){if(_(M,"scroll",this.unbindMove),this.unbindMove(),_(m,A,this.end,!0),this.dragging){var t=this.percent;this.percent=H(this.percent)%1,this.index=this.getIndex(this.index-n(t)),(this.percent<.1||t<0==this.pos>this.prevPos)&&(this.index=this.getIndex(t>0?"previous":"next"),this.percent=1-this.percent,t*=-1),this._animation&&this._animation.reset(),this.show(t>0?"previous":"next",!0),S()}this.drag=this.dragging=this.percent=null},show:function(t,e){var i=this;if(void 0===e&&(e=!1),e||!this.drag)if(this.stack[e?"unshift":"push"](t),!e&&this.stack.length>1)2===this.stack.length&&this._animation.forward(250);else{var n=this.index,s=this.getIndex(t),r=b(this.slides,"uk-active")&&this.slides[n],a=this.slides[s];if(r!==a){r&&P(r,"beforeitemhide",[this]),P(a,"beforeitemshow",[this]),this.index=s;var l=function(){r&&P(r,"itemhidden",[i]),P(a,"itemshown",[i]),v.write(function(){i.stack.shift(),i.stack.length?i.show(i.stack.shift(),!0):i._animation=null})};(r||this.initialAnimation)&&this._show(r?this.animation:this.Animations[this.initialAnimation],e?"cubic-bezier(0.165, 0.840, 0.440, 1.000)":this.easing,r,a,o(t,n),this.stack.length>1,l),r&&P(r,"itemhide",[this]),P(a,"itemshow",[this]),r||this.initialAnimation||l(),r&&v.flush()}else this.stack[e?"shift":"pop"]()}},_show:function(t,i,n,o,s,r,a){this._animation=new e(t,i,n,o,s,a),this._animation.show(n===o?300:r?150:this.duration,this.percent,r)},getIndex:function(t){return void 0===t&&(t=this.index),w(t,this.slides,this.index)},startAutoplay:function(){var t=this;this.stopAutoplay(),this.autoplay&&(this.interval=setInterval(function(){t.isHovering&&t.pauseOnHover||t.stack.length||t.show("next")},this.autoplayInterval))},stopAutoplay:function(){this.interval&&clearInterval(this.interval)}}}}}function Be(t){function e(t,e,i,n){return'<iframe src="'+t+'" width="'+e+'" height="'+i+'" style="max-width: 100%; box-sizing: border-box;" frameborder="0" allowfullscreen uk-video="autoplay: '+n+'" uk-responsive></iframe>'}if(!Be.installed){t.use(Oe);var i=t.mixin,n=t.util,o=n.$,s=n.$$,r=n.addClass,a=n.ajax,l=n.append,h=n.assign,c=n.attr,u=n.css,f=n.doc,d=n.docEl,p=n.data,m=n.getImage,g=n.html,v=n.index,w=n.on,y=n.pointerDown,b=n.pointerMove,x=n.removeClass,k=n.Transition,$=n.trigger;t.component("lightbox",{attrs:!0,props:{animation:String,toggle:String,autoplay:Boolean,autoplayInterval:Number,videoAutoplay:Boolean},defaults:{animation:void 0,toggle:"a",autoplay:0,videoAutoplay:!1},computed:{toggles:function(t,e){var i=this,n=t.toggle,o=s(n,e);return this._changed=!this._toggles||o.length!==this._toggles.length||o.some(function(t,e){return t!==i._toggles[e]}),this._toggles=o}},disconnected:function(){this.panel&&(this.panel.$destroy(!0),this.panel=null)},events:[{name:"click",delegate:function(){return this.toggle+":not(.uk-disabled)"},handler:function(t){t.preventDefault(),t.current.blur(),this.show(v(this.toggles,t.current))}}],update:function(){this.panel&&this.animation&&(this.panel.$props.animation=this.animation,this.panel.$emit()),this.toggles.length&&this._changed&&this.panel&&(this.panel.$destroy(!0),this._init())},methods:{_init:function(){return this.panel=this.panel||t.lightboxPanel(h({},this.$props,{items:this.toggles.reduce(function(t,e){return t.push(["href","caption","type","poster"].reduce(function(t,i){return t["href"===i?"source":i]=p(e,i),t},{})),t},[])}))},show:function(t){return this.panel||this._init(),this.panel.show(t)},hide:function(){return this.panel&&this.panel.hide()}}}),t.component("lightbox-panel",{mixins:[i.container,i.togglable,i.slideshow],functional:!0,defaults:{preload:1,videoAutoplay:!1,delayControls:3e3,items:[],cls:"uk-open",clsPage:"uk-lightbox-page",selList:".uk-lightbox-items",attrItem:"uk-lightbox-item",initialAnimation:"scale",pauseOnHover:!1,velocity:2,Animations:Jn(t),template:'<div class="uk-lightbox uk-overflow-hidden"> <ul class="uk-lightbox-items"></ul> <div class="uk-lightbox-toolbar uk-position-top uk-text-right uk-transition-slide-top uk-transition-opaque"> <button class="uk-lightbox-toolbar-icon uk-close-large" type="button" uk-close uk-toggle="!.uk-lightbox"></button> </div> <a class="uk-lightbox-button uk-position-center-left uk-position-medium uk-transition-fade" href="#" uk-slidenav-previous uk-lightbox-item="previous"></a> <a class="uk-lightbox-button uk-position-center-right uk-position-medium uk-transition-fade" href="#" uk-slidenav-next uk-lightbox-item="next"></a> <div class="uk-lightbox-toolbar uk-lightbox-caption uk-position-bottom uk-text-center uk-transition-slide-bottom uk-transition-opaque"></div> </div>'},created:function(){var t=this;this.$mount(l(this.container,this.template)),this.caption=o(".uk-lightbox-caption",this.$el),this.items.forEach(function(e,i){return l(t.list,"<li></li>")})},events:[{name:b+" "+y+" keydown",handler:"showControls"},{name:"click",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){t.preventDefault(),this.hide()}},{name:"show",self:!0,handler:function(){r(d,this.clsPage)}},{name:"shown",self:!0,handler:"showControls"},{name:"hide",self:!0,handler:"hideControls"},{name:"hidden",self:!0,handler:function(){x(d,this.clsPage)}},{name:"keyup",el:function(){return f},handler:function(t){if(this.isToggled(this.$el))switch(t.keyCode){case 27:this.hide();break;case 37:this.show("previous");break;case 39:this.show("next")}}},{name:"toggle",handler:function(t){t.preventDefault(),this.toggle()}},{name:"beforeitemshow",self:!0,delegate:function(){return this.selList+" > *"},handler:function(){this.isToggled()||this.toggleNow(this.$el,!0)}},{name:"itemshow",self:!0,delegate:function(){return this.selList+" > *"},handler:function(t){var e=this,i=t.target,n=v(i),o=this.getItem(n).caption;u(this.caption,"display",o?"":"none"),g(this.caption,o);for(var s=0;s<=this.preload;s++)e.loadItem(e.getIndex(n+s)),e.loadItem(e.getIndex(n-s))}},{name:"itemload",handler:function(t,i){var n,s=this,r=i.source,l=i.type;if(this.setItem(i,"<span uk-spinner></span>"),r)if("image"===l||r.match(/\.(jp(e)?g|png|gif|svg)$/i))m(r).then(function(t){return s.setItem(i,'<img width="'+t.width+'" height="'+t.height+'" src="'+r+'">')},function(){return s.setError(i)});else if("video"===l||r.match(/\.(mp4|webm|ogv)$/i)){var h=o("<video controls playsinline"+(i.poster?' poster="'+i.poster+'"':"")+' uk-video="autoplay: '+this.videoAutoplay+'"></video>');c(h,"src",r),w(h,"error",function(){return s.setError(i)}),w(h,"loadedmetadata",function(){c(h,{width:h.videoWidth,height:h.videoHeight}),s.setItem(i,h)})}else if("iframe"===l)this.setItem(i,'<iframe class="uk-lightbox-iframe" src="'+r+'" frameborder="0" allowfullscreen></iframe>');else if(n=r.match(/\/\/.*?youtube\.[a-z]+\/watch\?v=([^&\s]+)/)||r.match(/youtu\.be\/(.*)/)){var u=n[1],f=function(t,n){return void 0===t&&(t=640),void 0===n&&(n=450),s.setItem(i,e("//www.youtube.com/embed/"+u,t,n,s.videoAutoplay))};m("//img.youtube.com/vi/"+u+"/maxresdefault.jpg").then(function(t){var e=t.width,i=t.height;120===e&&90===i?m("//img.youtube.com/vi/"+u+"/0.jpg").then(function(t){var e=t.width,i=t.height;return f(e,i)},f):f(e,i)},f)}else(n=r.match(/(\/\/.*?)vimeo\.[a-z]+\/([0-9]+).*?/))&&a("//vimeo.com/api/oembed.json?maxwidth=1920&url="+encodeURI(r),{responseType:"json"}).then(function(t){var o=t.response,r=o.height,a=o.width;return s.setItem(i,e("//player.vimeo.com/video/"+n[2],a,r,s.videoAutoplay))})}}],methods:{toggle:function(){return this.isToggled()?this.hide():this.show()},hide:function(){this.isToggled()&&this.toggleNow(this.$el,!1),x(this.slides,this.clsActive),k.stop(this.slides),delete this.index,delete this.percent,delete this._animation},loadItem:function(t){void 0===t&&(t=this.index);var e=this.getItem(t);e.content||$(this.$el,"itemload",[e])},getItem:function(t){return void 0===t&&(t=this.index),this.items[t]||{}},setItem:function(e,i){h(e,{content:i});var n=g(this.slides[this.items.indexOf(e)],i);$(this.$el,"itemloaded",[this,n]),t.update(null,n)},setError:function(t){this.setItem(t,'<span uk-icon="icon: bolt; ratio: 2"></span>')},showControls:function(){clearTimeout(this.controlsTimer),this.controlsTimer=setTimeout(this.hideControls,this.delayControls),c(s("["+this.attrItem+"],[data-"+this.attrItem+"]",this.$el),"hidden",this.items.length<2?"":null),r(this.$el,"uk-active uk-transition-active")},hideControls:function(){x(this.$el,"uk-active uk-transition-active")}}})}}function Pe(t){if(!Pe.installed){var e=t.util,i=e.append,n=e.closest,o=e.css,s=e.each,r=e.pointerEnter,a=e.pointerLeave,l=e.remove,h=e.toFloat,c=e.Transition,u=e.trigger,f={};t.component("notification",{functional:!0,args:["message","status"],defaults:{message:"",status:"",timeout:5e3,group:null,pos:"top-center",clsClose:"uk-notification-close",clsMsg:"uk-notification-message"},created:function(){f[this.pos]||(f[this.pos]=i(t.container,'<div class="uk-notification uk-notification-'+this.pos+'"></div>'));var e=o(f[this.pos],"display","block");this.$mount(i(e,'<div class="'+this.clsMsg+(this.status?" "+this.clsMsg+"-"+this.status:"")+'"> <a href="#" class="'+this.clsClose+'" data-uk-close></a> <div>'+this.message+"</div> </div>"))},ready:function(){var t=this,e=h(o(this.$el,"marginBottom"));c.start(o(this.$el,{opacity:0,marginTop:-1*this.$el.offsetHeight,marginBottom:0}),{opacity:1,marginTop:0,marginBottom:e}).then(function(){t.timeout&&(t.timer=setTimeout(t.close,t.timeout))})},events:(d={click:function(t){n(t.target,'a[href="#"]')&&t.preventDefault(),this.close()}},d[r]=function(){this.timer&&clearTimeout(this.timer)},d[a]=function(){this.timeout&&(this.timer=setTimeout(this.close,this.timeout))},d),methods:{close:function(t){var e=this,i=function(){u(e.$el,"close",[e]),l(e.$el),f[e.pos].children.length||o(f[e.pos],"display","none")};this.timer&&clearTimeout(this.timer),t?i():c.start(this.$el,{opacity:0,marginTop:-1*this.$el.offsetHeight,marginBottom:0}).then(i)}}});var d;t.notification.closeAll=function(e,i){s(t.instances,function(t){"notification"!==t.$options.name||e&&e!==t.group||t.close(i)})}}}function Me(t){function e(t,e){return a(t*(1-(e-e*t)))}function i(t,e){return l(l(t,"color",e),"color").split(/[(),]/g).slice(1,-1).concat(1).slice(0,4).map(function(t){return g(t)})}function n(t,e){var i=t.length-1,n=Math.min(Math.floor(i*e),i-1),o=t.slice(n,n+2);return o.push(1===e?1:e%(1/i)*i),o}function o(t,e){var i=n(t,e),o=i[0],s=i[1],r=i[2];return(d(o)?o+Math.abs(o-s)*r*(o<s?1:-1):+s).toFixed(2)}if(!Me.installed){var s=t.mixin,r=t.util,a=r.clamp,l=r.css,h=r.Dimensions,c=r.each,u=r.getImage,f=r.includes,d=r.isNumber,p=r.isUndefined,m=r.scrolledOver,g=r.toFloat,v=r.query,w=r.win,y=["x","y","bgx","bgy","rotate","scale","color","backgroundColor","borderColor","opacity","blur","hue","grayscale","invert","saturate","sepia","fopacity"];s.parallax={props:y.reduce(function(t,e){return t[e]="list",t},{media:"media"}),defaults:y.reduce(function(t,e){return t[e]=void 0,t},{media:!1}),computed:{props:function(t,e){var n=this;return y.reduce(function(o,s){if(p(t[s]))return o;var r,a,h,c=s.match(/color/i),u=c||"opacity"===s,d=t[s].slice(0);u&&l(e,s,""),d.length<2&&d.unshift(("scale"===s?1:u?l(e,s):0)||0);var m=f(d.join(""),"%")?"%":"px";if(c){var v=e.style.color;d=d.map(function(t){return i(e,t)}),e.style.color=v}else d=d.map(g);if(s.match(/^bg/))if(l(e,"background-position-"+s[2],""),a=l(e,"backgroundPosition").split(" ")["x"===s[2]?0:1],n.covers){var w=Math.min.apply(Math,d),y=Math.max.apply(Math,d),b=d.indexOf(w)<d.indexOf(y);h=y-w,d=d.map(function(t){return t-(b?w:y)}),r=(b?-h:0)+"px"}else r=a;return o[s]={steps:d,unit:m,pos:r,bgPos:a,diff:h},o},{})},bgProps:function(){var t=this;return["bgx","bgy"].filter(function(e){return e in t.props})},covers:function(t,e){return"cover"===l(""!==e.style.backgroundSize?l(e,"backgroundSize",""):e,"backgroundSize")}},disconnected:function(){delete this._image},update:[{read:function(){var t=this;if(delete this._computeds.props,this._active=!this.media||w.matchMedia(this.media).matches,this._image&&(this._image.dimEl={width:this.$el.offsetWidth,height:this.$el.offsetHeight}),p(this._image)&&this.covers&&this.bgProps.length){var e=l(this.$el,"backgroundImage").replace(/^none|url\(["']?(.+?)["']?\)$/,"$1");e&&(this._image=!1,u(e).then(function(e){t._image={width:e.naturalWidth,height:e.naturalHeight},t.$emit()}))}},write:function(){var t=this;if(this._image)if(this._active){var e=this._image,i=e.dimEl,n=h.cover(e,i);this.bgProps.forEach(function(o){var s=t.props[o],r=s.diff,a=s.bgPos,l=s.steps,c="bgy"===o?"height":"width",u=n[c]-i[c];a.match(/%$|0px/)&&(u<r?i[c]=n[c]+r-u:u>r&&(a=parseFloat(a))&&(t.props[o].steps=l.map(function(t){return t-(u-r)/(100/a)})),n=h.cover(e,i))}),l(this.$el,{backgroundSize:n.width+"px "+n.height+"px",backgroundRepeat:"no-repeat"})}else l(this.$el,{backgroundSize:"",backgroundRepeat:""})},events:["load","resize"]}],methods:{reset:function(){var t=this;c(this.getCss(0),function(e,i){return l(t.$el,i,"")})},getCss:function(t){var e=!1,i=this.props;return Object.keys(i).reduce(function(s,r){var a=i[r],l=a.steps,h=a.unit,c=a.pos,u=o(l,t);switch(r){case"x":case"y":if(e)break;var f=["x","y"].map(function(e){return r===e?u+h:i[e]?o(i[e].steps,t)+i[e].unit:0}),d=f[0],p=f[1];e=s.transform+=" translate3d("+d+", "+p+", 0)";break;case"rotate":s.transform+=" rotate("+u+"deg)";break;case"scale":s.transform+=" scale("+u+")";break;case"bgy":case"bgx":s["background-position-"+r[2]]="calc("+c+" + "+(u+h)+")";break;case"color":case"backgroundColor":case"borderColor":var m=n(l,t),v=m[0],w=m[1],y=m[2];s[r]="rgba("+v.map(function(t,e){return t+=y*(w[e]-t),3===e?g(t):parseInt(t,10)}).join(",")+")";break;case"blur":s.filter+=" blur("+u+"px)";break;case"hue":s.filter+=" hue-rotate("+u+"deg)";break;case"fopacity":s.filter+=" opacity("+u+"%)";break;case"grayscale":case"invert":case"saturate":case"sepia":s.filter+=" "+r+"("+u+"%)";break;default:s[r]=u}return s},{transform:"",filter:""})}}},t.component("parallax",{mixins:[s.parallax],props:{target:String,viewport:Number,easing:Number},defaults:{target:!1,viewport:1,easing:1},computed:{target:function(t,e){var i=t.target;return i&&v(i,e)||e}},disconnected:function(){delete this._prev},update:[{read:function(){this._percent=e(m(this.target)/(this.viewport||1),this.easing)},write:function(t){"scroll"!==t.type&&delete this._prev,this._active?this._prev!==this._percent&&(l(this.$el,this.getCss(this._percent)),this._prev=this._percent):this.reset()},events:["scroll","load","resize"]}]})}}function He(t){function e(t){return l(t,"in")}function i(t,i,n){return n/=2,e(t)?i<0?1-n:n:i<0?n:1-n}if(!He.installed){t.use(Me),t.use(Oe);var n=t.mixin,o=t.util,s=o.closest,r=o.css,a=o.fastdom,l=o.endsWith,h=o.height,c=o.noop,u=o.Transition;t.component("slideshow",{mixins:[n.class,n.slideshow],props:{ratio:String,minHeight:Boolean,maxHeight:Boolean},defaults:{ratio:"16:9",minHeight:!1,maxHeight:!1,selList:".uk-slideshow-items",attrItem:"uk-slideshow-item",Animations:Gn(t)},ready:function(){var t=this;a.write(function(){return t.show(t.index)})},update:{read:function(){var t=this.ratio.split(":").map(Number),e=t[0],i=t[1];this.height=i*this.$el.offsetWidth/e,this.minHeight&&(this.height=Math.max(this.minHeight,this.height)),this.maxHeight&&(this.height=Math.min(this.maxHeight,this.height))},write:function(){h(this.list,Math.floor(this.height))},events:["load","resize"]}}),t.component("slideshow-parallax",{mixins:[n.parallax],computed:{item:function(){var e=t.getComponent(s(this.$el,".uk-slideshow"),"slideshow");return e&&s(this.$el,e.selList+" > *")}},events:[{name:"itemshown",self:!0,el:function(){return this.item},handler:function(){r(this.$el,this.getCss(.5))}},{name:"itemin itemout",self:!0,el:function(){return this.item},handler:function(t){var n=t.type,o=t.detail,s=o.percent,a=o.duration,l=o.ease,h=o.dir;u.cancel(this.$el),r(this.$el,this.getCss(i(n,h,s))),u.start(this.$el,this.getCss(e(n)?.5:h>0?1:0),a,l).catch(c)}},{name:"transitioncanceled transitionend",self:!0,el:function(){return this.item},handler:function(){u.cancel(this.$el)}},{name:"itemtranslatein itemtranslateout",self:!0,el:function(){return this.item},handler:function(t){var e=t.type,n=t.detail,o=n.percent,s=n.dir;u.cancel(this.$el),r(this.$el,this.getCss(i(e,s,o)))}}]})}}function ze(t){function e(i){return i&&(t.getComponent(i,"sortable")||e(i.parentNode))}function i(t,e){return t.parentNode===e.parentNode&&y(t)>y(e)}if(!ze.installed){var n=t.mixin,o=t.util,s=o.addClass,r=o.after,a=o.assign,l=o.append,h=o.attr,c=o.before,u=o.closest,f=o.css,d=o.doc,p=o.docEl,m=o.height,g=o.fastdom,v=o.getPos,w=o.includes,y=o.index,b=o.isInput,x=o.noop,k=o.offset,$=o.off,_=o.on,T=o.pointerDown,E=o.pointerMove,C=o.pointerUp,A=o.position,S=o.preventClick,I=o.Promise,N=o.remove,D=o.removeClass,O=o.toggleClass,B=o.toNodes,P=o.Transition,M=o.trigger,H=o.win,z=o.within;t.component("sortable",{mixins:[n.class],props:{group:String,animation:Number,threshold:Number,clsItem:String,clsPlaceholder:String,clsDrag:String,clsDragState:String,clsBase:String,clsNoDrag:String,clsEmpty:String,clsCustom:String,handle:String},defaults:{group:!1,animation:150,threshold:5,clsItem:"uk-sortable-item",clsPlaceholder:"uk-sortable-placeholder",clsDrag:"uk-sortable-drag",clsDragState:"uk-drag",clsBase:"uk-sortable",clsNoDrag:"uk-sortable-nodrag",clsEmpty:"uk-sortable-empty",clsCustom:"",handle:!1},init:function(){var t=this;["init","start","move","end"].forEach(function(e){var i=t[e];t[e]=function(e){t.scrollY=H.scrollY;var n=v(e),o=n.x,s=n.y;t.pos={x:o,y:s},i(e)}})},events:(L={},L[T]="init",L),update:{write:function(){if(this.clsEmpty&&O(this.$el,this.clsEmpty,!this.$el.children.length),this.drag){k(this.drag,{top:this.pos.y+this.origin.top,left:this.pos.x+this.origin.left});var t,e=k(this.drag).top,i=e+this.drag.offsetHeight;e>0&&e<this.scrollY?t=this.scrollY-5:i<m(d)&&i>m(H)+this.scrollY&&(t=this.scrollY+5),t&&setTimeout(function(){return H.scrollTo(H.scrollX,t)},5)}}},methods:{init:function(t){var e=t.target,i=t.button,n=t.defaultPrevented,o=B(this.$el.children).filter(function(t){return z(e,t)})[0];!o||b(t.target)||this.handle&&!z(e,this.handle)||i>0||z(e,"."+this.clsNoDrag)||n||(t.preventDefault(),this.touched=[this],this.placeholder=o,this.origin=a({target:e,index:y(o)},this.pos),_(p,E,this.move),_(p,C,this.end),_(H,"scroll",this.scroll),this.threshold||this.start(t))},start:function(e){this.drag=l(t.container,this.placeholder.outerHTML.replace(/^<li/i,"<div").replace(/li>$/i,"div>")),f(this.drag,a({boxSizing:"border-box",width:this.placeholder.offsetWidth,height:this.placeholder.offsetHeight},f(this.placeholder,["paddingLeft","paddingRight","paddingTop","paddingBottom"]))),h(this.drag,"uk-no-boot",""),s(this.drag,this.clsDrag+" "+this.clsCustom),m(this.drag.firstElementChild,m(this.placeholder.firstElementChild));var i=k(this.placeholder),n=i.left,o=i.top;a(this.origin,{left:n-this.pos.x,top:o-this.pos.y}),s(this.placeholder,this.clsPlaceholder),s(this.$el.children,this.clsItem),s(p,this.clsDragState),M(this.$el,"start",[this,this.placeholder,this.drag]),this.move(e)},move:function(t){if(this.drag){this.$emit();var i="mousemove"===t.type?t.target:d.elementFromPoint(this.pos.x-d.body.scrollLeft,this.pos.y-d.body.scrollTop),n=e(i),o=e(this.placeholder),s=n!==o;if(n&&!z(i,this.placeholder)&&(!s||n.group&&n.group===o.group)){if(i=n.$el===i.parentNode&&i||B(n.$el.children).filter(function(t){return z(i,t)})[0],s)o.remove(this.placeholder);else if(!i)return;n.insert(this.placeholder,i),w(this.touched,n)||this.touched.push(n)}}else(Math.abs(this.pos.x-this.origin.x)>this.threshold||Math.abs(this.pos.y-this.origin.y)>this.threshold)&&this.start(t)},scroll:function(){var t=H.scrollY;t!==this.scrollY&&(this.pos.y+=t-this.scrollY,this.scrollY=t,this.$emit())},end:function(t){if($(p,E,this.move),$(p,C,this.end),$(H,"scroll",this.scroll),this.drag){S();var i=e(this.placeholder);this===i?this.origin.index!==y(this.placeholder)&&M(this.$el,"moved",[this,this.placeholder]):(M(i.$el,"added",[i,this.placeholder]),M(this.$el,"removed",[this,this.placeholder])),M(this.$el,"stop",[this]),N(this.drag),this.drag=null;var n=this.touched.map(function(t){return t.clsPlaceholder+" "+t.clsItem}).join(" ");this.touched.forEach(function(t){return D(t.$el.children,n)}),D(p,this.clsDragState)}else"mouseup"!==t.type&&z(t.target,"a[href]")&&(location.href=u(t.target,"a[href]").href)},insert:function(t,e){var n=this;s(this.$el.children,this.clsItem);var o=function(){e?!z(t,n.$el)||i(t,e)?c(e,t):r(e,t):l(n.$el,t)};this.animation?this.animate(o):o()},remove:function(t){z(t,this.$el)&&(this.animation?this.animate(function(){return N(t)}):N(t))},animate:function(t){var e=this,i=[],n=B(this.$el.children),o={position:"",width:"",height:"",pointerEvents:"",top:"",left:"",bottom:"",right:""};n.forEach(function(t){i.push(a({position:"absolute",pointerEvents:"none",width:t.offsetWidth,height:t.offsetHeight},A(t)))}),t(),n.forEach(P.cancel),f(this.$el.children,o),this.$update("update",!0),g.flush(),f(this.$el,"minHeight",m(this.$el));var s=n.map(function(t){return A(t)});I.all(n.map(function(t,n){return P.start(f(t,i[n]),s[n],e.animation)})).then(function(){f(e.$el,"minHeight",""),f(n,o),e.$update("update",!0),g.flush()},x)}}});var L}}function Le(t){if(!Le.installed){var e=t.util,i=t.mixin,n=e.append,o=e.attr,s=e.doc,r=e.fastdom,a=e.flipPosition,l=e.includes,h=e.isTouch,c=e.isVisible,u=e.matches,f=e.on,d=e.pointerDown,p=e.pointerEnter,m=e.pointerLeave,g=e.remove,v=e.within,w=[];t.component("tooltip",{attrs:!0,mixins:[i.container,i.togglable,i.position],props:{delay:Number,title:String},defaults:{pos:"top",title:"",delay:0,animation:["uk-animation-scale-up"],duration:100,cls:"uk-active",clsPos:"uk-tooltip"},connected:function(){var t=this;r.write(function(){return o(t.$el,{title:null,"aria-expanded":!1})})},disconnected:function(){this.hide()},methods:{show:function(){var t=this;l(w,this)||(w.forEach(function(t){return t.hide()}),w.push(this),this._unbind=f(s,"click",function(e){return!v(e.target,t.$el)&&t.hide()}),clearTimeout(this.showTimer),this.tooltip=n(this.container,'<div class="'+this.clsPos+'" aria-hidden><div class="'+this.clsPos+'-inner">'+this.title+"</div></div>"),o(this.$el,"aria-expanded",!0),this.positionAt(this.tooltip,this.$el),this.origin="y"===this.getAxis()?a(this.dir)+"-"+this.align:this.align+"-"+a(this.dir),this.showTimer=setTimeout(function(){t.toggleElement(t.tooltip,!0),t.hideTimer=setInterval(function(){c(t.$el)||t.hide()},150)},this.delay))},hide:function(){var t=w.indexOf(this);!~t||u(this.$el,"input")&&this.$el===s.activeElement||(w.splice(t,1),clearTimeout(this.showTimer),clearInterval(this.hideTimer),o(this.$el,"aria-expanded",!1),this.toggleElement(this.tooltip,!1),this.tooltip&&g(this.tooltip),this.tooltip=!1,this._unbind())}},events:(y={blur:"hide"},y["focus "+p+" "+d]=function(t){t.type===d&&h(t)||this.show()},y[m]=function(t){h(t)||this.hide()},y)});var y}}function je(t){function e(t,e){return e.match(new RegExp("^"+t.replace(/\//g,"\\/").replace(/\*\*/g,"(\\/[^\\/]+)*").replace(/\*/g,"[^\\/]+").replace(/((?!\\))\?/g,"$1.")+"$","i"))}function i(t,e){for(var i=[],n=0;n<t.length;n+=e){for(var o=[],s=0;s<e;s++)o.push(t[n+s]);i.push(o)}return i}function n(t){t.preventDefault(),t.stopPropagation()}if(!je.installed){var o=t.util,s=o.addClass,r=o.ajax,a=o.matches,l=o.noop,h=o.on,c=o.removeClass,u=o.trigger;t.component("upload",{props:{allow:String,clsDragover:String,concurrent:Number,mime:String,msgInvalidMime:String,msgInvalidName:String,multiple:Boolean,name:String,params:Object,type:String,url:String},defaults:{allow:!1,clsDragover:"uk-dragover",concurrent:1,mime:!1,msgInvalidMime:"Invalid File Type: %s",msgInvalidName:"Invalid File Name: %s",multiple:!1,name:"files[]",params:{},type:"POST",url:"",abort:l,beforeAll:l,beforeSend:l,complete:l,completeAll:l,error:l,fail:l,load:l,loadEnd:l,loadStart:l,progress:l},events:{change:function(t){a(t.target,'input[type="file"]')&&(t.preventDefault(),t.target.files&&this.upload(t.target.files),t.target.value="")},drop:function(t){n(t);var e=t.dataTransfer;e&&e.files&&(c(this.$el,this.clsDragover),this.upload(e.files))},dragenter:function(t){n(t)},dragover:function(t){n(t),s(this.$el,this.clsDragover)},dragleave:function(t){n(t),c(this.$el,this.clsDragover)}},methods:{upload:function(t){var n=this;if(t.length){u(this.$el,"upload",[t]);for(var o=0;o<t.length;o++){if(n.allow&&!e(n.allow,t[o].name))return void n.fail(n.msgInvalidName.replace(/%s/,n.allow));if(n.mime&&!e(n.mime,t[o].type))return void n.fail(n.msgInvalidMime.replace(/%s/,n.mime))}this.multiple||(t=[t[0]]),this.beforeAll(this,t);var s=i(t,this.concurrent),a=function(t){var e=new FormData;t.forEach(function(t){return e.append(n.name,t)});for(var i in n.params)e.append(i,n.params[i]);r(n.url,{data:e,method:n.type,beforeSend:function(t){var e=t.xhr;e.upload&&h(e.upload,"progress",n.progress),["loadStart","load","loadEnd","abort"].forEach(function(t){return h(e,t.toLowerCase(),n[t])}),n.beforeSend(t)}}).then(function(t){n.complete(t),s.length?a(s.shift()):n.completeAll(t)},function(t){return n.error(t.message)})};a(s.shift())}}}})}}var We=2,Fe="setImmediate"in window?setImmediate:setTimeout;t.reject=function(e){return new t(function(t,i){i(e)})},t.resolve=function(e){return new t(function(t,i){t(e)})},t.all=function(e){return new t(function(i,n){var o=0,s=[];0===e.length&&i(s);for(var r=0;r<e.length;r+=1)t.resolve(e[r]).then(function(t){return function(n){s[t]=n,(o+=1)===e.length&&i(s)}}(r),n)})},t.race=function(e){return new t(function(i,n){for(var o=0;o<e.length;o+=1)t.resolve(e[o]).then(i,n)})};var Re=t.prototype;Re.resolve=function(t){var e=this;if(e.state===We){if(t===e)throw new TypeError("Promise settled with itself.");var i=!1;try{var n=t&&t.then;if(null!==t&&f(t)&&u(n))return void n.call(t,function(t){i||e.resolve(t),i=!0},function(t){i||e.reject(t),i=!0})}catch(t){return void(i||e.reject(t))}e.state=0,e.value=t,e.notify()}},Re.reject=function(t){var e=this;if(e.state===We){if(t===e)throw new TypeError("Promise settled with itself.");e.state=1,e.value=t,e.notify()}},Re.notify=function(){var t=this;Fe(function(){if(t.state!==We)for(;t.deferred.length;){var e=t.deferred.shift(),i=e[0],n=e[1],o=e[2],s=e[3];try{0===t.state?o(u(i)?i.call(void 0,t.value):t.value):1===t.state&&(u(n)?o(n.call(void 0,t.value)):s(t.value))}catch(t){s(t)}}})},Re.then=function(e,i){var n=this;return new t(function(t,o){n.deferred.push([e,i,t,o]),n.notify()})},Re.catch=function(t){return this.then(void 0,t)};var Ye,Ve,qe,Ue=Object.prototype.hasOwnProperty,Xe="Promise"in window?window.Promise:t,Je=/(?:^|[-_\/])(\w)/g,Ge=/([a-z\d])([A-Z])/g,Ze=/-(\w)/g,Ke=String.prototype,Qe=Ke.startsWith||function(t){return 0===this.lastIndexOf(t,0)},ti=Ke.endsWith||function(t){return this.substr(-1*t.length)===t},ei=function(t){return~this.indexOf(t)},ii=Ke.includes||ei,ni=Array.prototype.includes||ei,oi=Array.isArray,si={},ri=Object.assign||function(t){for(var e=[],n=arguments.length-1;n-- >0;)e[n]=arguments[n+1];t=Object(t);for(var o=0;o<e.length;o++){var s=e[o];if(null!==s)for(var r in s)i(s,r)&&(t[r]=s[r])}return t},ai=window,li=document,hi=li.documentElement,ci="rtl"===_t(hi,"dir"),ui="transitioncanceled",fi={start:z,stop:function(t){return Ut(t,Vi),Xe.resolve()},cancel:function(t){Ut(t,ui)},inProgress:function(t){return Lt(t,"uk-transition")}},di="animationcancel",pi="uk-animation-",mi="uk-cancel-animation",gi=new RegExp(pi+"(enter|leave)"),vi={in:function(t,e,i,n){return L(t,e,i,n,!1)},out:function(t,e,i,n){return L(t,e,i,n,!0)},inProgress:function(t){return gi.test(_t(t,"class"))},cancel:function(t){Ut(t,di)}},wi={area:!0,base:!0,br:!0,col:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,menuitem:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0},yi={ratio:function(t,e,i){var n="width"===e?"height":"width";return o={},o[n]=Math.round(i*t[n]/t[e]),o[e]=i,o;var o},contain:function(t,e){var i=this;return t=ri({},t),I(t,function(n,o){return t=t[o]>e[o]?i.ratio(t,o,e[o]):t}),t},cover:function(t,e){var i=this;return t=this.contain(t,e),I(t,function(n,o){return t=t[o]<e[o]?i.ratio(t,o,e[o]):t}),t}},bi="input,select,textarea,button",xi=/^\s*<(\w+|!)[^>]*>/,ki=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,$i=Array.prototype,_i=/(^|,)\s*[!>+~]/,Ti=/([!>+~])(?=\s+[!>+~]|\s*$)/g,Ei=Element.prototype,Ci=Ei.matches||Ei.msMatchesSelector,Ai=Ei.closest||function(t){var e=this;do{if(mt(e,t))return e;e=e.parentNode}while(e&&1===e.nodeType)},Si=ai.CSS&&CSS.escape||function(t){return t.replace(/([^\x7f-\uFFFF\w-])/g,function(t){return"\\"+t})},Ii={"animation-iteration-count":!0,"column-count":!0,"fill-opacity":!0,"flex-grow":!0,"flex-shrink":!0,"font-weight":!0,"line-height":!0,opacity:!0,order:!0,orphans:!0,widows:!0,"z-index":!0,zoom:!0},Ni={},Di={},Oi=["webkit","moz","ms"],Bi=li.createElement("div").style;!function(){var t=li.createElement("_").classList;t&&(t.add("a","b"),t.toggle("c",!1),Ve=t.contains("b"),qe=!t.contains("c"),Ye=!0),t=null}();var Pi=ai.MutationObserver||ai.WebKitMutationObserver,Mi=ai.requestAnimationFrame||function(t){return setTimeout(t,1e3/60)},Hi="ontouchstart"in ai,zi=ai.PointerEvent,Li="ontouchstart"in ai||ai.DocumentTouch&&li instanceof DocumentTouch||navigator.msPointerEnabled&&navigator.msMaxTouchPoints||navigator.pointerEnabled&&navigator.maxTouchPoints,ji=Li?"mousedown "+(Hi?"touchstart":"pointerdown"):"mousedown",Wi=Li?"mousemove "+(Hi?"touchmove":"pointermove"):"mousemove",Fi=Li?"mouseup "+(Hi?"touchend":"pointerup"):"mouseup",Ri=Li&&zi?"pointerenter":"mouseenter",Yi=Li&&zi?"pointerleave":"mouseleave",Vi=Rt("transition","transition-end"),qi=Rt("animation","animation-start"),Ui=Rt("animation","animation-end"),Xi={reads:[],writes:[],read:function(t){return this.reads.push(t),ee(),t},write:function(t){return this.writes.push(t),ee(),t},clear:function(t){return ne(this.reads,t)||ne(this.writes,t)},flush:function(){ie(this.reads),ie(this.writes.splice(0,this.writes.length)),this.scheduled=!1,(this.reads.length||this.writes.length)&&ee()}};oe.prototype={positions:[],position:null,init:function(){var t=this;this.positions=[],this.position=null;var e=!1;this.unbind=Yt(li,"mousemove",function(i){e||(setTimeout(function(){var n=Date.now(),o=t.positions.length;o&&n-t.positions[o-1].time>100&&t.positions.splice(0,o),t.positions.push({time:n,x:i.pageX,y:i.pageY}),t.positions.length>5&&t.positions.shift(),e=!1},5),e=!0)})},cancel:function(){this.unbind&&this.unbind()},movesTo:function(t){if(this.positions.length<2)return!1;var e=ce(t),i=this.positions[this.positions.length-1],n=this.positions[0];if(e.left<=i.x&&i.x<=e.right&&e.top<=i.y&&i.y<=e.bottom)return!1;var o=[[{x:e.left,y:e.top},{x:e.right,y:e.bottom}],[{x:e.right,y:e.top},{x:e.left,y:e.bottom}]];return e.right<=i.x||(e.left>=i.x?(o[0].reverse(),o[1].reverse()):e.bottom<=i.y?o[0].reverse():e.top>=i.y&&o[1].reverse()),!!o.reduce(function(t,e){return t+(se(n,e[0])<se(i,e[0])&&se(n,e[1])>se(i,e[1]))},0)}};var Ji={};Ji.args=Ji.created=Ji.events=Ji.init=Ji.ready=Ji.connected=Ji.disconnected=Ji.destroy=function(t,e){return t=t&&!oi(t)?[t]:t,e?t?t.concat(e):oi(e)?e:[e]:t},Ji.update=function(t,e){return Ji.args(t,u(e)?{read:e}:e)},Ji.props=function(t,e){return oi(e)&&(e=e.reduce(function(t,e){return t[e]=String,t},{})),Ji.methods(t,e)},Ji.computed=Ji.defaults=Ji.methods=function(t,e){return e?t?ri({},t,e):e:t};var Gi=function(t,e){return b(e)?t:e},Zi=0,Ki=function(t){this.id=++Zi,this.el=xt(t)};Ki.prototype.isVideo=function(){return this.isYoutube()||this.isVimeo()||this.isHTML5()},Ki.prototype.isHTML5=function(){return"VIDEO"===this.el.tagName},Ki.prototype.isIFrame=function(){return"IFRAME"===this.el.tagName},Ki.prototype.isYoutube=function(){return this.isIFrame()&&!!this.el.src.match(/\/\/.*?youtube\.[a-z]+\/(watch\?v=[^&\s]+|embed)|youtu\.be\/.*/)},Ki.prototype.isVimeo=function(){return this.isIFrame()&&!!this.el.src.match(/vimeo\.com\/video\/.*/)},Ki.prototype.enableApi=function(){var t=this;if(this.ready)return this.ready;var e,i=this.isYoutube(),n=this.isVimeo();return i||n?this.ready=new Xe(function(o){qt(t.el,"load",function(){if(i){var n=function(){return ae(t.el,{event:"listening",id:t.id})};e=setInterval(n,100),n()}}),le(function(e){return i&&e.id===t.id&&"onReady"===e.event||n&&Number(e.player_id)===t.id}).then(function(){o(),e&&clearInterval(e)}),_t(t.el,"src",t.el.src+(c(t.el.src,"?")?"&":"?")+(i?"enablejsapi=1":"api=1&player_id="+Zi))}):Xe.resolve()},Ki.prototype.play=function(){var t=this;this.isVideo()&&(this.isIFrame()?this.enableApi().then(function(){return ae(t.el,{func:"playVideo",method:"play"})}):this.isHTML5()&&this.el.play())},Ki.prototype.pause=function(){var t=this;this.isVideo()&&(this.isIFrame()?this.enableApi().then(function(){return ae(t.el,{func:"pauseVideo",method:"pause"})}):this.isHTML5()&&this.el.pause())},Ki.prototype.mute=function(){var t=this;this.isVideo()&&(this.isIFrame()?this.enableApi().then(function(){return ae(t.el,{func:"mute",method:"setVolume",value:0})}):this.isHTML5()&&(this.el.muted=!0,_t(this.el,"muted","")))};var Qi,tn,en,nn,on={width:["x","left","right"],height:["y","top","bottom"]},sn=pe("height"),rn=pe("width"),an={};H(function(){Yt(li,"click",function(){return nn=!0},!0),Yt(li,ji,function(t){var e=t.target,i=Ee(t),n=i.x,o=i.y,s=Date.now();an.el="tagName"in e?e:e.parentNode,Qi&&clearTimeout(Qi),an.x1=n,an.y1=o,an.last&&s-an.last<=250&&(an={}),an.last=s,nn=t.button>0}),Yt(li,Wi,function(t){var e=Ee(t),i=e.x,n=e.y;an.x2=i,an.y2=n}),Yt(li,Fi,function(t){var e=t.target;an.x2&&Math.abs(an.x1-an.x2)>30||an.y2&&Math.abs(an.y1-an.y2)>30?tn=setTimeout(function(){an.el&&(Ut(an.el,"swipe"),Ut(an.el,"swipe"+$e(an))),an={}}):"last"in an?(en=setTimeout(function(){return an.el&&Ut(an.el,"tap")}),an.el&&dt(e,an.el)&&(Qi=setTimeout(function(){Qi=null,an.el&&!nn&&Ut(an.el,"click"),an={}},350))):an={}}),Yt(li,"touchcancel",_e),Yt(ai,"scroll",_e)});var ln=!1;Yt(li,"touchstart",function(){return ln=!0},!0),Yt(li,"click",function(){ln=!1}),Yt(li,"touchcancel",function(){return ln=!1},!0);var hn=Object.freeze({bind:e,hasOwn:i,Promise:Xe,classify:n,hyphenate:o,camelize:s,ucfirst:a,startsWith:l,endsWith:h,includes:c,isArray:oi,isFunction:u,isObject:f,isPlainObject:d,isWindow:p,isDocument:m,isBoolean:g,isString:v,isNumber:w,isNumeric:y,isUndefined:b,toBoolean:x,toNumber:k,toFloat:_,toList:T,toMedia:E,coerce:C,toMs:A,swap:S,assign:ri,each:I,clamp:N,noop:D,intersectRect:O,pointInRect:B,ajax:P,$:ot,$$:st,query:at,queryAll:lt,filter:ft,within:dt,matches:mt,closest:gt,parents:vt,isJQuery:wt,toNode:xt,toNodes:kt,escape:$t,attr:_t,hasAttr:Tt,removeAttr:Et,filterAttr:Ct,data:At,win:ai,doc:li,docEl:hi,isRtl:ci,isReady:M,ready:H,transition:z,Transition:fi,animate:L,Animation:vi,isInView:j,scrolledOver:function(t){var e=(t=xt(t)).offsetHeight,i=W(t),n=sn(ai),o=n+Math.min(0,i-n),s=Math.max(0,n-(sn(li)-(i+e)));return N((o+ai.pageYOffset-i)/((o+(e-(s<n?s:0)))/100)/100)},getIndex:F,isVoidElement:R,Dimensions:yi,preventClick:function(){var t=setTimeout(function(){return Ut(li,"click")},0);qt(li,"click",function(e){e.preventDefault(),e.stopImmediatePropagation(),clearTimeout(t)},!0)},isVisible:Y,selInput:bi,isInput:V,empty:q,html:U,prepend:function(t,e){return(t=xt(t)).hasChildNodes()?Z(e,function(e){return t.insertBefore(e,t.firstChild)}):X(t,e)},append:X,before:J,after:G,remove:K,wrapAll:Q,wrapInner:tt,unwrap:et,fragment:it,index:nt,css:St,getStyles:It,getStyle:Nt,getCssVar:Dt,addClass:Pt,removeClass:Mt,removeClasses:Ht,replaceClass:zt,hasClass:Lt,toggleClass:jt,Observer:Pi,requestAnimationFrame:Mi,hasTouch:Li,pointerDown:ji,pointerMove:Wi,pointerUp:Fi,pointerEnter:Ri,pointerLeave:Yi,transitionend:Vi,animationstart:qi,animationend:Ui,getImage:function(t){return new Xe(function(e,i){var n=new Image;n.onerror=i,n.onload=function(){return e(n)},n.src=t})},on:Yt,off:Vt,once:qt,trigger:Ut,createEvent:Xt,toEventTargets:te,fastdom:Xi,MouseTracker:oe,mergeOptions:re,Player:Ki,positionAt:he,offset:ce,position:fe,height:sn,width:rn,flipPosition:be,isTouch:Te,getPos:Ee}),cn=function(t){this._init(t)};cn.util=hn,cn.data="__uikit__",cn.prefix="uk-",cn.options={},cn.instances={},cn.elements=[],function(t){function e(t){return new Function("return function "+n(t)+" (options) { this._init(options); }")()}function i(t,e){if(1===t.nodeType)for(e(t),t=t.firstElementChild;t;)i(t,e),t=t.nextElementSibling}function o(t,e){if(t)for(var i in t)t[i]._isReady&&t[i]._callUpdate(e)}var s=t.data;t.use=function(t){if(!t.installed)return t.call(null,this),t.installed=!0,this},t.mixin=function(e,i){i=(v(i)?t.components[i]:i)||this,(e=re({},e)).mixins=i.options.mixins,delete i.options.mixins,i.options=re(e,i.options)},t.extend=function(t){var i=this,n=e((t=t||{}).name||i.options.name||"UIkitComponent");return n.prototype=Object.create(i.prototype),n.prototype.constructor=n,n.options=re(i.options,t),n.super=i,n.extend=i.extend,n},t.update=function(e,n,r){if(void 0===r&&(r=!1),e=Xt(e||"update"),n)if(n=xt(n),r)do{o(n[s],e),n=n.parentNode}while(n);else i(n,function(t){return o(t[s],e)});else o(t.instances,e)};var r;Object.defineProperty(t,"container",{get:function(){return r||li.body},set:function(t){r=t}})}(cn),function(t){t.prototype._callHook=function(t){var e=this,i=this.$options[t];i&&i.forEach(function(t){return t.call(e)})},t.prototype._callReady=function(){this._isReady||(this._isReady=!0,this._callHook("ready"),this._resetComputeds(),this._callUpdate())},t.prototype._callConnected=function(){var e=this;this._connected||(c(t.elements,this.$options.el)||t.elements.push(this.$options.el),t.instances[this._uid]=this,this._initEvents(),this._callHook("connected"),this._connected=!0,this._initObserver(),this._isReady||H(function(){return e._callReady()}),this._callUpdate())},t.prototype._callDisconnected=function(){if(this._connected){this._observer&&(this._observer.disconnect(),this._observer=null);var e=t.elements.indexOf(this.$options.el);~e&&t.elements.splice(e,1),delete t.instances[this._uid],this._unbindEvents(),this._callHook("disconnected"),this._connected=!1}},t.prototype._callUpdate=function(t){var e=this,i=(t=Xt(t||"update")).type,n=t.detail;"update"===i&&n&&n.mutation&&this._resetComputeds();var o=this.$options.update,s=this._frames,r=s.reads,a=s.writes;o&&o.forEach(function(n,o){var s=n.read,l=n.write,h=n.events;("update"===i||c(h,i))&&(s&&!c(Xi.reads,r[o])&&(r[o]=Xi.read(function(){!1===s.call(e,t)&&l&&(Xi.clear(a[o]),delete a[o]),delete r[o]})),l&&!c(Xi.writes,a[o])&&(a[o]=Xi.write(function(){l.call(e,t),delete a[o]})))})}}(cn),function(t){function n(t,e){var i={},n=t.args;void 0===n&&(n=[]);var a=t.props;void 0===a&&(a={});var h,c,u=t.el;if(!a)return i;for(h in a)if(c=o(h),Tt(u,c)){var f=C(a[h],_t(u,c),u);if("target"===c&&(!f||l(f,"_")))continue;i[h]=f}var d=r(At(u,e),n);for(h in d)void 0!==a[c=s(h)]&&(i[c]=C(a[c],d[h],u));return i}function r(t,e){void 0===e&&(e=[]);try{return t?l(t,"{")?JSON.parse(t):e.length&&!c(t,":")?(i={},i[e[0]]=t,i):t.split(";").reduce(function(t,e){var i=e.split(/:(.+)/),n=i[0],o=i[1];return n&&o&&(t[n.trim()]=o.trim()),t},{}):{};var i}catch(t){return{}}}function a(t,e,n){Object.defineProperty(t,e,{enumerable:!0,get:function(){var o=t._computeds,s=t.$props,r=t.$el;return i(o,e)||(o[e]=n.call(t,s,r)),o[e]},set:function(i){t._computeds[e]=i}})}function h(t,i,n){d(i)||(i={name:n,handler:i});var o=i.name,s=i.el,r=i.delegate,a=i.self,l=i.filter,c=i.handler;s=u(s)?s.call(t):s||t.$el,oi(s)?s.forEach(function(e){return h(t,ri({},i,{el:e}),n)}):!s||l&&!l.call(t)||(c=m(v(c)?t[c]:e(c,t)),a&&(c=f(c)),t._events.push(Yt(s,o,r?v(r)?r:r.call(t):null,c)))}function f(t){return function(e){if(e.target===e.currentTarget||e.target===e.current)return t.call(null,e)}}function p(t,e){return t.every(function(t){return!t||!i(t,e)})}function m(t){return function(e){return oi(e.detail)?t.apply(t,[e].concat(e.detail)):t(e)}}var g=0;t.prototype.props={},t.prototype._init=function(e){e=e||{},e=this.$options=re(this.constructor.options,e,this),this.$el=null,this.$name=t.prefix+o(this.$options.name),this.$props={},this._frames={reads:{},writes:{}},this._events=[],this._uid=g++,this._initData(),this._initMethods(),this._initComputeds(),this._callHook("created"),e.el&&this.$mount(e.el)},t.prototype._initData=function(){var t=this,e=this.$options,n=e.defaults,o=e.data;void 0===o&&(o={});var s=e.args;void 0===s&&(s=[]);var r=e.props;void 0===r&&(r={});var a=e.el;s.length&&oi(o)&&(o=o.slice(0,s.length).reduce(function(t,e,i){return d(e)?ri(t,e):t[s[i]]=e,t},{}));for(var l in n)t.$props[l]=t[l]=i(o,l)&&!b(o[l])?C(r[l],o[l],a):oi(n[l])?n[l].concat():n[l]},t.prototype._initMethods=function(){var t=this,i=this.$options.methods;if(i)for(var n in i)t[n]=e(i[n],t)},t.prototype._initComputeds=function(){var t=this,e=this.$options.computed;if(this._resetComputeds(),e)for(var i in e)a(t,i,e[i])},t.prototype._resetComputeds=function(){this._computeds={}},t.prototype._initProps=function(t){var e=this;this._resetComputeds(),ri(this.$props,t||n(this.$options,this.$name));var i=[this.$options.computed,this.$options.methods];for(var o in e.$props)p(i,o)&&(e[o]=e.$props[o])},t.prototype._initEvents=function(){var t=this,e=this.$options.events;e&&e.forEach(function(e){if(i(e,"handler"))h(t,e);else for(var n in e)h(t,e[n],n)})},t.prototype._unbindEvents=function(){this._events.forEach(function(t){return t()}),this._events=[]},t.prototype._initObserver=function(){var t=this,e=this.$options,i=e.attrs,s=e.props,r=e.el;!this._observer&&s&&i&&Pi&&(i=oi(i)?i:Object.keys(s).map(function(t){return o(t)}),this._observer=new Pi(function(){var e=n(t.$options,t.$name);i.some(function(i){return!b(e[i])&&e[i]!==t.$props[i]})&&t.$reset(e)}),this._observer.observe(r,{attributes:!0,attributeFilter:i.concat([this.$name,"data-"+this.$name])}))}}(cn),function(t){var e=t.data;t.prototype.$mount=function(t){var i=this.$options.name;t[e]||(t[e]={}),t[e][i]||(t[e][i]=this,this.$el=this.$options.el=this.$options.el||t,this._initProps(),this._callHook("init"),dt(t,hi)&&this._callConnected())},t.prototype.$emit=function(t){this._callUpdate(t)},t.prototype.$update=function(e,i){t.update(e,this.$options.el,i)},t.prototype.$reset=function(t){this._callDisconnected(),this._initProps(t),this._callConnected()},t.prototype.$destroy=function(t){void 0===t&&(t=!1);var i=this.$options,n=i.el,o=i.name;n&&this._callDisconnected(),this._callHook("destroy"),n&&n[e]&&(delete n[e][o],Object.keys(n[e]).length||delete n[e],t&&K(this.$el))}}(cn),function(t){var e=t.data;t.components={},t.component=function(e,i){var n=s(e);if(d(i))i.name=n,i=t.extend(i);else{if(b(i))return t.components[n];i.options.name=n}return t.components[n]=i,t[n]=function(e,i){function o(e){return t.getComponent(e,n)||new t.components[n]({el:e,data:i||{}})}for(var s=arguments.length,r=Array(s);s--;)r[s]=arguments[s];return d(e)?new t.components[n]({data:e}):t.components[n].options.functional?new t.components[n]({data:[].concat(r)}):e&&e.nodeType?o(e):st(e).map(o)[0]},t._initialized&&!i.options.functional&&Xi.read(function(){return t[n]("[uk-"+e+"],[data-uk-"+e+"]")}),t.components[n]},t.getComponents=function(t){return t&&(t=wt(t)?t[0]:t)&&t[e]||{}},t.getComponent=function(e,i){return t.getComponents(e)[i]},t.connect=function(i){var n;if(i[e])for(n in i[e])i[e][n]._callConnected();for(var o=0;o<i.attributes.length;o++)(l(n=i.attributes[o].name,"uk-")||l(n,"data-uk-"))&&(n=s(n.replace("data-uk-","").replace("uk-","")),t[n]&&t[n](i))},t.disconnect=function(t){for(var i in t[e])t[e][i]._callDisconnected()}}(cn);var un,fn,dn,pn={init:function(){Pt(this.$el,this.$name)}},mn={props:{container:Boolean},defaults:{container:!0},computed:{container:function(t){var e=t.container;return!0===e&&cn.container||e&&$(e)||cn.container}}},gn={props:{cls:Boolean,animation:"list",duration:Number,origin:String,transition:String,queued:Boolean},defaults:{cls:!1,animation:[!1],duration:200,origin:!1,transition:"linear",queued:!1,initProps:{overflow:"",height:"",paddingTop:"",paddingBottom:"",marginTop:"",marginBottom:""},hideProps:{overflow:"hidden",height:0,paddingTop:0,paddingBottom:0,marginTop:0,marginBottom:0}},computed:{hasAnimation:function(t){return!!t.animation[0]},hasTransition:function(t){var e=t.animation;return this.hasAnimation&&!0===e[0]}},methods:{toggleElement:function(t,e,i){var n=this;return new Xe(function(o){var s,r=function(t){return Xe.all(t.map(function(t){return n._toggleElement(t,e,i)}))},a=(t=kt(t)).filter(function(t){return n.isToggled(t)}),l=t.filter(function(t){return!c(a,t)});if(n.queued&&b(i)&&b(e)&&n.hasAnimation&&!(t.length<2)){var h=li.body,u=h.scrollTop,f=a[0],d=vi.inProgress(f)&&Lt(f,"uk-animation-leave")||fi.inProgress(f)&&"0px"===f.style.height;s=r(a),d||(s=s.then(function(){var t=r(l);return h.scrollTop=u,t}))}else s=r(l.concat(a));s.then(o,D)})},toggleNow:function(t,e){var i=this;return new Xe(function(n){return Xe.all(kt(t).map(function(t){return i._toggleElement(t,e,!1)})).then(n,D)})},isToggled:function(t){var e=kt(t||this.$el);return this.cls?Lt(e,this.cls.split(" ")[0]):!Tt(e,"hidden")},updateAria:function(t){!1===this.cls&&_t(t,"aria-hidden",!this.isToggled(t))},_toggleElement:function(t,e,i){var n=this;if(e=g(e)?e:vi.inProgress(t)?Lt(t,"uk-animation-leave"):fi.inProgress(t)?"0px"===t.style.height:!this.isToggled(t),!Ut(t,"before"+(e?"show":"hide"),[this]))return Xe.reject();var o=(!1!==i&&this.hasAnimation?this.hasTransition?this._toggleHeight:this._toggleAnimation:this._toggleImmediate)(t,e);return Ut(t,e?"show":"hide",[this]),o.then(function(){Ut(t,e?"shown":"hidden",[n]),cn.update(null,t)})},_toggle:function(t,e){t&&(this.cls?jt(t,this.cls,c(this.cls," ")?void 0:e):_t(t,"hidden",e?null:""),st("[autofocus]",t).some(function(t){return Y(t)&&(t.focus()||!0)}),this.updateAria(t),cn.update(null,t))},_toggleImmediate:function(t,e){return this._toggle(t,e),Xe.resolve()},_toggleHeight:function(t,e){var i,n=this,o=fi.inProgress(t),s=t.hasChildNodes?_(St(t.firstElementChild,"marginTop"))+_(St(t.lastElementChild,"marginBottom")):0,r=Y(t)?sn(t)+(o?0:s):0;return fi.cancel(t),this.isToggled(t)||this._toggle(t,!0),sn(t,""),Xi.flush(),i=sn(t)+(o?0:s),sn(t,r),(e?fi.start(t,ri({},this.initProps,{overflow:"hidden",height:i}),Math.round(this.duration*(1-r/i)),this.transition):fi.start(t,this.hideProps,Math.round(this.duration*(r/i)),this.transition).then(function(){return n._toggle(t,!1)})).then(function(){return St(t,n.initProps)})},_toggleAnimation:function(t,e){var i=this;return vi.cancel(t),e?(this._toggle(t,!0),vi.in(t,this.animation[0],this.duration,this.origin)):vi.out(t,this.animation[1]||this.animation[0],this.duration,this.origin).then(function(){return i._toggle(t,!1)})}}},vn={mixins:[pn,mn,gn],props:{clsPanel:String,selClose:String,escClose:Boolean,bgClose:Boolean,stack:Boolean},defaults:{cls:"uk-open",escClose:!0,bgClose:!0,overlay:!0,stack:!1},computed:{panel:function(t,e){return ot("."+t.clsPanel,e)},transitionElement:function(){return this.panel},transitionDuration:function(){return A(St(this.transitionElement,"transitionDuration"))}},events:[{name:"click",delegate:function(){return this.selClose},handler:function(t){t.preventDefault(),this.hide()}},{name:"toggle",self:!0,handler:function(t){t.defaultPrevented||(t.preventDefault(),this.toggle())}},{name:"show",self:!0,handler:function(){Lt(hi,this.clsPage)||(this.scrollbarWidth=rn(ai)-hi.offsetWidth,St(li.body,"overflowY",this.scrollbarWidth&&this.overlay?"scroll":"")),Pt(hi,this.clsPage)}},{name:"hidden",self:!0,handler:function(){for(var t,e=this,i=this.prev;i;){if(i.clsPage===e.clsPage){t=!0;break}i=i.prev}t||Mt(hi,this.clsPage),!this.prev&&St(li.body,"overflowY","")}}],methods:{toggle:function(){return this.isToggled()?this.hide():this.show()},show:function(){if(!this.isToggled()){this.container&&this.$el.parentNode!==this.container&&(X(this.container,this.$el),this._callConnected());var t=un&&un!==this&&un;if(un=this,t){if(!this.stack)return void t.hide().then(this.show);this.prev=t}return Ce(),this.toggleNow(this.$el,!0)}},hide:function(){if(this.isToggled())return(un=un&&un!==this&&un||this.prev)||Ae(),this.toggleNow(this.$el,!1)},getActive:function(){return un},_toggleImmediate:function(t,e){var i=this;return new Xe(function(n){return Mi(function(){i._toggle(t,e),i.transitionDuration?qt(i.transitionElement,Vi,n,!1,function(t){return t.target===i.transitionElement}):n()})})}}},wn={props:{pos:String,offset:null,flip:Boolean,clsPos:String},defaults:{pos:"bottom-"+(ci?"right":"left"),flip:!0,offset:!1,clsPos:""},computed:{pos:function(t){var e=t.pos;return(e+(c(e,"-")?"":"-center")).split("-")},dir:function(){return this.pos[0]},align:function(){return this.pos[1]}},methods:{positionAt:function(t,e,i){Ht(t,this.clsPos+"-(top|bottom|left|right)(-[a-z]+)?"),St(t,{top:"",left:""});var n=k(this.offset)||0,o=this.getAxis(),s=he(t,e,"x"===o?be(this.dir)+" "+this.align:this.align+" "+be(this.dir),"x"===o?this.dir+" "+this.align:this.align+" "+this.dir,"x"===o?""+("left"===this.dir?-1*n:n):" "+("top"===this.dir?-1*n:n),null,this.flip,i).target,r=s.x,a=s.y;this.dir="x"===o?r:a,this.align="x"===o?a:r,jt(t,this.clsPos+"-"+this.dir+"-"+this.align,!1===this.offset)},getAxis:function(){return"top"===this.dir||"bottom"===this.dir?"y":"x"}}},yn=function(t){t.component("accordion",{mixins:[pn,gn],props:{targets:String,active:null,collapsible:Boolean,multiple:Boolean,toggle:String,content:String,transition:String},defaults:{targets:"> *",active:!1,animation:[!0],collapsible:!0,multiple:!1,clsOpen:"uk-open",toggle:"> .uk-accordion-title",content:"> .uk-accordion-content",transition:"ease"},computed:{items:function(t,e){return st(t.targets,e)}},events:[{name:"click",delegate:function(){return this.targets+" "+this.$props.toggle},handler:function(t){t.preventDefault(),this.toggle(nt(st(this.targets+" "+this.$props.toggle,this.$el),t.current))}}],ready:function(){var t=!1!==this.active&&this.items[Number(this.active)]&&!Lt(t,this.clsOpen);t&&this.toggle(t,!1)},update:function(){var t=this;this.items.forEach(function(e){return t._toggleImmediate(ot(t.content,e),Lt(e,t.clsOpen))});var e=!this.collapsible&&!Lt(this.items,this.clsOpen)&&this.items[0];e&&this.toggle(e,!1)},methods:{toggle:function(t,e){var i=this,n=F(t,this.items),o=ft(this.items,"."+this.clsOpen);(t=this.items[n])&&[t].concat(!this.multiple&&!c(o,t)&&o||[]).forEach(function(n){var s=n===t,r=s&&!Lt(n,i.clsOpen);if(r||!s||i.collapsible||!(o.length<2)){jt(n,i.clsOpen,r);var a=n._wrapper?n._wrapper.firstElementChild:ot(i.content,n);n._wrapper||(n._wrapper=Q(a,"<div>"),_t(n._wrapper,"hidden",r?"":null)),i._toggleImmediate(a,!0),i.toggleElement(n._wrapper,r,e).then(function(){Lt(n,i.clsOpen)===r&&(r||i._toggleImmediate(a,!1),n._wrapper=null,et(a))})}})}}})},bn=function(t){t.component("alert",{attrs:!0,mixins:[pn,gn],args:"animation",props:{close:String},defaults:{animation:[!0],selClose:".uk-alert-close",duration:150,hideProps:ri({opacity:0},gn.defaults.hideProps)},events:[{name:"click",delegate:function(){return this.selClose},handler:function(t){t.preventDefault(),this.close()}}],methods:{close:function(){var t=this;this.toggleElement(this.$el).then(function(){return t.$destroy(!0)})}}})},xn=function(t){t.component("cover",{mixins:[pn,t.components.video.options],props:{width:Number,height:Number},defaults:{automute:!0},update:{write:function(){var t=this.$el;if(Y(t)){var e=t.parentNode,i=e.offsetHeight,n=e.offsetWidth;St(St(t,{width:"",height:""}),yi.cover({width:this.width||t.clientWidth,height:this.height||t.clientHeight},{width:n+(n%2?1:0),height:i+(i%2?1:0)}))}},events:["load","resize"]},events:{loadedmetadata:function(){this.$emit()}}})},kn=function(t){function e(){n||(n=!0,Yt(hi,"click",function(t){var e,n=t.target;if(!t.defaultPrevented)for(;i&&i!==e&&!dt(n,i.$el)&&(!i.toggle||!dt(n,i.toggle.$el));)e=i,i.hide(!1)}))}var i;t.component("drop",{mixins:[wn,gn],args:"pos",props:{mode:"list",toggle:Boolean,boundary:"query",boundaryAlign:Boolean,delayShow:Number,delayHide:Number,clsDrop:String},defaults:{mode:["click","hover"],toggle:!0,boundary:ai,boundaryAlign:!1,delayShow:0,delayHide:800,clsDrop:!1,hoverIdle:200,animation:["uk-animation-fade"],cls:"uk-open"},init:function(){this.tracker=new oe,this.clsDrop=this.clsDrop||"uk-"+this.$options.name,this.clsPos=this.clsDrop,Pt(this.$el,this.clsDrop)},ready:function(){this.updateAria(this.$el),this.toggle&&(this.toggle=t.toggle(v(this.toggle)?at(this.toggle,this.$el):this.$el.previousElementSibling,{target:this.$el,mode:this.mode}))},events:[{name:"click",delegate:function(){return"."+this.clsDrop+"-close"},handler:function(t){t.preventDefault(),this.hide(!1)}},{name:"click",delegate:function(){return'a[href^="#"]'},handler:function(t){if(!t.defaultPrevented){var e=t.target.hash;e||t.preventDefault(),e&&dt(e,this.$el)||this.hide(!1)}}},{name:"beforescroll",handler:function(){this.hide(!1)}},{name:"toggle",self:!0,handler:function(t,e){t.preventDefault(),this.isToggled()?this.hide(!1):this.show(e,!1)}},{name:Ri,filter:function(){return c(this.mode,"hover")},handler:function(t){Te(t)||(i&&i!==this&&i.toggle&&c(i.toggle.mode,"hover")&&!dt(t.target,i.toggle.$el)&&!B({x:t.pageX,y:t.pageY},ce(i.$el))&&i.hide(!1),t.preventDefault(),this.show(this.toggle))}},{name:"toggleshow",handler:function(t,e){e&&!c(e.target,this.$el)||(t.preventDefault(),this.show(e||this.toggle))}},{name:"togglehide "+Yi,handler:function(t,e){Te(t)||e&&!c(e.target,this.$el)||(t.preventDefault(),this.toggle&&c(this.toggle.mode,"hover")&&this.hide())}},{name:"beforeshow",self:!0,handler:function(){this.clearTimers()}},{name:"show",self:!0,handler:function(){this.tracker.init(),Pt(this.toggle.$el,this.cls),_t(this.toggle.$el,"aria-expanded","true"),e()}},{name:"beforehide",self:!0,handler:function(){this.clearTimers()}},{name:"hide",handler:function(t){var e=t.target;this.$el===e?(i=this.isActive()?null:i,Mt(this.toggle.$el,this.cls),_t(this.toggle.$el,"aria-expanded","false"),this.toggle.$el.blur(),st("a, button",this.toggle.$el).forEach(function(t){return t.blur()}),this.tracker.cancel()):i=null===i&&dt(e,this.$el)&&this.isToggled()?this:i}}],update:{write:function(){this.isToggled()&&!vi.inProgress(this.$el)&&this.position()},events:["resize"]},methods:{show:function(t,e){var n=this;void 0===e&&(e=!0);var o=function(){n.isToggled()||(n.position(),n.toggleElement(n.$el,!0))},s=function(){if(n.toggle=t||n.toggle,n.clearTimers(),!n.isActive())if(e&&i&&i!==n&&i.isDelaying)n.showTimer=setTimeout(n.show,10);else{if(n.isParentOf(i)){if(!i.hideTimer)return;i.hide(!1)}else if(i&&!n.isChildOf(i)&&!n.isParentOf(i))for(var s;i&&i!==s&&!n.isChildOf(i);)s=i,i.hide(!1);e&&n.delayShow?n.showTimer=setTimeout(o,n.delayShow):o(),i=n}};t&&this.toggle&&t.$el!==this.toggle.$el?(qt(this.$el,"hide",s),this.hide(!1)):s()},hide:function(t){var e=this;void 0===t&&(t=!0);var i=function(){return e.toggleNow(e.$el,!1)};this.clearTimers(),this.isDelaying=this.tracker.movesTo(this.$el),t&&this.isDelaying?this.hideTimer=setTimeout(this.hide,this.hoverIdle):t&&this.delayHide?this.hideTimer=setTimeout(i,this.delayHide):i()},clearTimers:function(){clearTimeout(this.showTimer),clearTimeout(this.hideTimer),this.showTimer=null,this.hideTimer=null,this.isDelaying=!1},isActive:function(){return i===this},isChildOf:function(t){return t&&t!==this&&dt(this.$el,t.$el)},isParentOf:function(t){return t&&t!==this&&dt(t.$el,this.$el)},position:function(){Ht(this.$el,this.clsDrop+"-(stack|boundary)"),St(this.$el,{top:"",left:"",display:"block"}),jt(this.$el,this.clsDrop+"-boundary",this.boundaryAlign);var t=ce(this.boundary),e=this.boundaryAlign?t:ce(this.toggle.$el);if("justify"===this.align){var i="y"===this.getAxis()?"width":"height";St(this.$el,i,e[i])}else this.$el.offsetWidth>Math.max(t.right-e.left,e.right-t.left)&&(Pt(this.$el,this.clsDrop+"-stack"),Ut(this.$el,"stack",[this]));this.positionAt(this.$el,this.boundaryAlign?this.boundary:this.toggle.$el,this.boundary),St(this.$el,"display","")}}}),t.drop.getActive=function(){return i};var n},$n=function(t){t.component("dropdown",t.components.drop.extend({name:"dropdown"}))},_n=function(t){t.component("form-custom",{mixins:[pn],args:"target",props:{target:Boolean},defaults:{target:!1},computed:{input:function(t,e){return ot(bi,e)},state:function(){return this.input.nextElementSibling},target:function(t,e){var i=t.target;return i&&(!0===i&&this.input.parentNode===e&&this.input.nextElementSibling||at(i,e))}},connected:function(){Ut(this.input,"change")},events:[{name:"focusin focusout mouseenter mouseleave",delegate:bi,handler:function(t){var e=t.type;t.current===this.input&&jt(this.state,"uk-"+(c(e,"focus")?"focus":"hover"),c(["focusin","mouseenter"],e))}},{name:"change",handler:function(){var t,e=this.target,i=this.input;e&&(e[V(e)?"value":"textContent"]=i.files&&i.files[0]?i.files[0].name:mt(i,"select")&&(t=st("option",i).filter(function(t){return t.selected})[0])?t.textContent:i.value)}}]})},Tn=function(t){t.component("gif",{update:{read:function(){var t=j(this.$el);!this.isInView&&t&&(this.$el.src=this.$el.src),this.isInView=t},events:["scroll","load","resize"]}})},En=function(t){t.component("grid",t.components.margin.extend({mixins:[pn],name:"grid",defaults:{margin:"uk-grid-margin",clsStack:"uk-grid-stack"},update:{write:function(){jt(this.$el,this.clsStack,this.stacks)},events:["load","resize"]}}))},Cn=function(t){t.component("height-match",{args:"target",props:{target:String,row:Boolean},defaults:{target:"> *",row:!0},computed:{elements:function(t,e){return st(t.target,e)}},update:{read:function(){var t=this,e=!1;St(this.elements,"minHeight",""),this.rows=this.row?this.elements.reduce(function(t,i){return e!==i.offsetTop?t.push([i]):t[t.length-1].push(i),e=i.offsetTop,t},[]).map(function(e){return t.match(e)}):[this.match(this.elements)]},write:function(){this.rows.forEach(function(t){var e=t.height;return St(t.elements,"minHeight",e)})},events:["load","resize"]},methods:{match:function(t){if(t.length<2)return{};var e=0,i=[];return t.forEach(function(t){var n,o;Y(t)||(n=_t(t,"style"),o=_t(t,"hidden"),_t(t,{style:(n||"")+";display:block !important;",hidden:null})),e=Math.max(e,t.offsetHeight),i.push(t.offsetHeight),b(n)||_t(t,{style:n,hidden:o})}),t=t.filter(function(t,n){return i[n]<e}),{height:e,elements:t}}}})},An=function(t){function e(t){return t&&t.offsetHeight||0}t.component("height-viewport",{props:{expand:Boolean,offsetTop:Boolean,offsetBottom:Boolean,minHeight:Number},defaults:{expand:!1,offsetTop:!1,offsetBottom:!1,minHeight:0},update:{write:function(){St(this.$el,"boxSizing","border-box");var t,i=sn(ai),n=0;if(this.expand){St(this.$el,{height:"",minHeight:""});var o=i-e(hi);o>0&&(t=e(this.$el)+o)}else{var s=ce(this.$el).top;s<i/2&&this.offsetTop&&(n+=s),!0===this.offsetBottom?n+=e(this.$el.nextElementSibling):y(this.offsetBottom)?n+=i/100*this.offsetBottom:this.offsetBottom&&h(this.offsetBottom,"px")?n+=_(this.offsetBottom):v(this.offsetBottom)&&(n+=e(at(this.offsetBottom,this.$el))),t=n?"calc(100vh - "+n+"px)":"100vh"}if(t){St(this.$el,{height:"",minHeight:t});var r=this.$el.offsetHeight;this.minHeight&&this.minHeight>r&&St(this.$el,"minHeight",this.minHeight),i-n>=r&&St(this.$el,"height",t)}},events:["load","resize"]}})},Sn=function(t){H(function(){if(Li){var e="uk-hover";Yt(li,"tap",function(t){var i=t.target;return st("."+e).forEach(function(t,n){return!dt(i,n)&&Mt(n,e)})}),Object.defineProperty(t,"hoverSelector",{set:function(t){Yt(li,"tap",t,function(t){return Pt(t.current,e)})}}),t.hoverSelector=".uk-animation-toggle, .uk-transition-toggle, [uk-hover]"}})},In=function(t){function e(e,i){t.component(e,t.components.icon.extend({name:e,mixins:i?[i]:[],defaults:{icon:e}}))}function i(t){return o[t]?(n[t]||(n[t]=ot(o[t].trim())),n[t]):null}var n={},o={spinner:'<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" cx="15" cy="15" r="14"></circle></svg>',totop:'<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 9 9 1 17 9 "></polyline></svg>',marker:'<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="4" width="1" height="11"></rect><rect x="4" y="9" width="11" height="1"></rect></svg>',"close-icon":'<svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg>',"close-large":'<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line></svg>',"navbar-toggle-icon":'<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg>',"overlay-icon":'<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><rect x="19" y="0" width="1" height="40"></rect><rect x="0" y="19" width="40" height="1"></rect></svg>',"pagination-next":'<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"></polyline></svg>',"pagination-previous":'<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="6 1 1 6 6 11"></polyline></svg>',"search-icon":'<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg>',"search-large":'<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.8" cx="17.5" cy="17.5" r="16.5"></circle><line fill="none" stroke="#000" stroke-width="1.8" x1="38" y1="39" x2="29" y2="30"></line></svg>',"search-navbar":'<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10.5" cy="10.5" r="9.5"/><line fill="none" stroke="#000" stroke-width="1.1" x1="23" y1="23" x2="17" y2="17"/></svg>',"slidenav-next":'<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg>',"slidenav-next-large":'<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="4.002,38.547 22.527,20.024 4,1.5 "></polyline></svg>',"slidenav-previous":'<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg>',"slidenav-previous-large":'<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="20.527,1.5 2,20.024 20.525,38.547 "></polyline></svg>'};t.component("icon",t.components.svg.extend({attrs:["icon","ratio"],mixins:[pn],name:"icon",args:"icon",props:["icon"],defaults:{exclude:["id","style","class","src","icon"]},init:function(){Pt(this.$el,"uk-icon"),ci&&(this.icon=S(S(this.icon,"left","right"),"previous","next"))},disconnected:function(){delete this.delay},methods:{getSvg:function(){var t=i(this.icon);return t?Xe.resolve(t):Xe.reject("Icon not found.")}}})),["marker","navbar-toggle-icon","overlay-icon","pagination-previous","pagination-next","totop"].forEach(function(t){return e(t)}),["slidenav-previous","slidenav-next"].forEach(function(t){return e(t,{init:function(){Pt(this.$el,"uk-slidenav"),Lt(this.$el,"uk-slidenav-large")&&(this.icon+="-large")}})}),e("search-icon",{init:function(){Lt(this.$el,"uk-search-icon")&&vt(this.$el,".uk-search-large").length?this.icon="search-large":vt(this.$el,".uk-search-navbar").length&&(this.icon="search-navbar")}}),e("close",{init:function(){this.icon="close-"+(Lt(this.$el,"uk-close-large")?"large":"icon")}}),e("spinner",{connected:function(){var t=this;this.svg.then(function(e){return 1!==t.ratio&&St(ot("circle",e),"stroke-width",1/t.ratio)},D)}}),t.icon.add=function(e){Object.keys(e).forEach(function(t){o[t]=e[t],delete n[t]}),t._initialized&&I(t.instances,function(t){"icon"===t.$options.name&&t.$reset()})}},Nn=function(t){t.component("leader",{mixins:[pn],props:{fill:String,media:"media"},defaults:{fill:"",media:!1,clsWrapper:"uk-leader-fill",clsHide:"uk-leader-hide",attrFill:"data-fill"},computed:{fill:function(t){var e=t.fill;return e||Dt("leader-fill")}},connected:function(){this.wrapper=tt(this.$el,'<span class="'+this.clsWrapper+'">')[0]},disconnected:function(){et(this.wrapper.childNodes),delete this._width},update:[{read:function(){var t=this._width;this._width=Math.floor(this.$el.offsetWidth/2),this._changed=this._changed||t!==this._width,this._hide=this.media&&!ai.matchMedia(this.media).matches},write:function(){jt(this.wrapper,this.clsHide,this._hide),this._changed&&(this._changed=!1,_t(this.wrapper,this.attrFill,new Array(this._width).join(this.fill)))},events:["load","resize"]}]})},Dn=function(t){t.component("margin",{props:{margin:String,firstColumn:Boolean},defaults:{margin:"uk-margin-small-top",firstColumn:"uk-first-column"},update:{read:function(){var t=this,e=this.$el.children;if(e.length&&Y(this.$el)){this.stacks=!0;for(var i=[[]],n=0;n<e.length;n++){var o=e[n],s=o.getBoundingClientRect();if(s.height)for(var r=i.length-1;r>=0;r--){var a=i[r];if(!a[0]){a.push(o);break}var l=a[0].getBoundingClientRect();if(s.top>=Math.floor(l.bottom)){i.push([o]);break}if(Math.floor(s.bottom)>l.top){if(t.stacks=!1,s.left<l.left&&!ci){a.unshift(o);break}a.push(o);break}if(0===r){i.unshift([o]);break}}}this.rows=i}else this.rows=!1},write:function(){var t=this;this.rows&&this.rows.forEach(function(e,i){return e.forEach(function(e,n){jt(e,t.margin,0!==i),jt(e,t.firstColumn,0===n)})})},events:["load","resize"]}})},On=function(t){t.component("modal",{mixins:[vn],defaults:{clsPage:"uk-modal-page",clsPanel:"uk-modal-dialog",selClose:".uk-modal-close, .uk-modal-close-default, .uk-modal-close-outside, .uk-modal-close-full"},events:[{name:"show",self:!0,handler:function(){Lt(this.panel,"uk-margin-auto-vertical")?Pt(this.$el,"uk-flex"):St(this.$el,"display","block"),sn(this.$el)}},{name:"hidden",self:!0,handler:function(){St(this.$el,"display",""),Mt(this.$el,"uk-flex")}}]}),t.component("overflow-auto",{mixins:[pn],computed:{modal:function(t,e){return gt(e,".uk-modal")},panel:function(t,e){return gt(e,".uk-modal-dialog")}},connected:function(){St(this.$el,"minHeight",150)},update:{write:function(){if(this.panel&&this.modal){var t=St(this.$el,"maxHeight");St(St(this.$el,"maxHeight",150),"maxHeight",Math.max(150,150+sn(this.modal)-this.panel.offsetHeight)),t!==St(this.$el,"maxHeight")&&Ut(this.$el,"resize")}},events:["load","resize"]}}),t.modal.dialog=function(e,i){var n=t.modal(' <div class="uk-modal"> <div class="uk-modal-dialog">'+e+"</div> </div> ",i);return Yt(n.$el,"hidden",function(t){t.target===t.current&&n.$destroy(!0)}),n.show(),n},t.modal.alert=function(e,i){return i=ri({bgClose:!1,escClose:!1,labels:t.modal.labels},i),new Xe(function(n){return Yt(t.modal.dialog(' <div class="uk-modal-body">'+(v(e)?e:U(e))+'</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-primary uk-modal-close" autofocus>'+i.labels.ok+"</button> </div> ",i).$el,"hide",n)})},t.modal.confirm=function(e,i){return i=ri({bgClose:!1,escClose:!1,labels:t.modal.labels},i),new Xe(function(n,o){return Yt(t.modal.dialog(' <div class="uk-modal-body">'+(v(e)?e:U(e))+'</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close">'+i.labels.cancel+'</button> <button class="uk-button uk-button-primary uk-modal-close" autofocus>'+i.labels.ok+"</button> </div> ",i).$el,"click",".uk-modal-footer button",function(t){return 0===nt(t.target)?o():n()})})},t.modal.prompt=function(e,i,n){return n=ri({bgClose:!1,escClose:!1,labels:t.modal.labels},n),new Xe(function(o){var s=!1,r=t.modal.dialog(' <form class="uk-form-stacked"> <div class="uk-modal-body"> <label>'+(v(e)?e:U(e))+'</label> <input class="uk-input" autofocus> </div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close" type="button">'+n.labels.cancel+'</button> <button class="uk-button uk-button-primary">'+n.labels.ok+"</button> </div> </form> ",n),a=ot("input",r.$el);a.value=i,Yt(r.$el,"submit","form",function(t){t.preventDefault(),o(a.value),s=!0,r.hide()}),Yt(r.$el,"hide",function(){s||o(null)})})},t.modal.labels={ok:"Ok",cancel:"Cancel"}},Bn=function(t){t.component("nav",t.components.accordion.extend({name:"nav",defaults:{targets:"> .uk-parent",toggle:"> a",content:"> ul"}}))},Pn=function(t){t.component("navbar",{mixins:[pn],props:{dropdown:String,mode:"list",align:String,offset:Number,boundary:Boolean,boundaryAlign:Boolean,clsDrop:String,delayShow:Number,delayHide:Number,dropbar:Boolean,dropbarMode:String,dropbarAnchor:"query",duration:Number},defaults:{dropdown:".uk-navbar-nav > li",align:ci?"right":"left",clsDrop:"uk-navbar-dropdown",mode:void 0,offset:void 0,delayShow:void 0,delayHide:void 0,boundaryAlign:void 0,flip:"x",boundary:!0,dropbar:!1,dropbarMode:"slide",dropbarAnchor:!1,duration:200},computed:{boundary:function(t,e){var i=t.boundary,n=t.boundaryAlign;return!0===i||n?e:i},pos:function(t){return"bottom-"+t.align}},ready:function(){this.dropbar&&t.navbarDropbar(at(this.dropbar,this.$el)||G(this.dropbarAnchor||this.$el,"<div></div>"),{clsDrop:this.clsDrop,mode:this.dropbarMode,duration:this.duration,navbar:this})},update:function(){t.drop(st(this.dropdown+" ."+this.clsDrop,this.$el).filter(function(e){return!t.getComponent(e,"dropdown")}),ri({},this.$props,{boundary:this.boundary,pos:this.pos}))},events:[{name:"mouseover",delegate:function(){return this.dropdown},handler:function(t){var e=t.current,i=this.getActive();i&&i.toggle&&!dt(i.toggle.$el,e)&&!i.tracker.movesTo(i.$el)&&i.hide(!1)}}],methods:{getActive:function(){var e=t.drop.getActive();return e&&c(e.mode,"hover")&&dt(e.toggle.$el,this.$el)&&e}}}),t.component("navbar-dropbar",{mixins:[pn],defaults:{clsDrop:"",mode:"slide",navbar:null,duration:200},init:function(){"slide"===this.mode&&Pt(this.$el,"uk-navbar-dropbar-slide")},events:[{name:"beforeshow",el:function(){return this.navbar.$el},handler:function(t,e){var i=e.$el;"bottom"!==e.dir||dt(i,this.$el)||(X(this.$el,i),e.show(),t.preventDefault())}},{name:"mouseleave",handler:function(){var t=this.navbar.getActive();t&&!mt(this.$el,":hover")&&t.hide()}},{name:"show",handler:function(t,e){var i=e.$el;this.clsDrop&&Pt(i,this.clsDrop+"-dropbar"),this.transitionTo(i.offsetHeight+_(St(i,"margin-top"))+_(St(i,"margin-bottom")))}},{name:"beforehide",handler:function(t,e){var i=e.$el,n=this.navbar.getActive();mt(this.$el,":hover")&&n&&n.$el===i&&t.preventDefault()}},{name:"hide",handler:function(t,e){var i=e.$el,n=this.navbar.getActive();(!n||n&&n.$el===i)&&this.transitionTo(0)}}],methods:{transitionTo:function(t){return sn(this.$el,Y(this.$el)?sn(this.$el):0),fi.cancel(this.$el),fi.start(this.$el,{height:t},this.duration).catch(D)}}})},Mn=function(t){t.component("offcanvas",{mixins:[vn],args:"mode",props:{content:String,mode:String,flip:Boolean,overlay:Boolean},defaults:{content:".uk-offcanvas-content",mode:"slide",flip:!1,overlay:!1,clsPage:"uk-offcanvas-page",clsContainer:"uk-offcanvas-container",clsPanel:"uk-offcanvas-bar",clsFlip:"uk-offcanvas-flip",clsContent:"uk-offcanvas-content",clsContentAnimation:"uk-offcanvas-content-animation",clsSidebarAnimation:"uk-offcanvas-bar-animation",clsMode:"uk-offcanvas",clsOverlay:"uk-offcanvas-overlay",selClose:".uk-offcanvas-close"},computed:{content:function(t){var e=t.content;return ot(e)},clsFlip:function(t){var e=t.flip,i=t.clsFlip;return e?i:""},clsOverlay:function(t){var e=t.overlay,i=t.clsOverlay;return e?i:""},clsMode:function(t){var e=t.mode,i=t.clsMode;return i+"-"+e},clsSidebarAnimation:function(t){var e=t.mode,i=t.clsSidebarAnimation;return"none"===e||"reveal"===e?"":i},clsContentAnimation:function(t){var e=t.mode,i=t.clsContentAnimation;return"push"!==e&&"reveal"!==e?"":i},transitionElement:function(t){return"reveal"===t.mode?this.panel.parentNode:this.panel}},update:{write:function(){this.getActive()===this&&((this.overlay||this.clsContentAnimation)&&rn(this.content,rn(ai)-this.scrollbarWidth),this.overlay&&(sn(this.content,sn(ai)),dn&&(this.content.scrollTop=dn.y)))},events:["resize"]},events:[{name:"click",delegate:function(){return'a[href^="#"]'},handler:function(t){var e=t.current;e.hash&&ot(e.hash,this.content)&&(dn=null,this.hide())}},{name:"beforescroll",filter:function(){return this.overlay},handler:function(t,e,i){e&&i&&this.isToggled()&&ot(i,this.content)&&(qt(this.$el,"hidden",function(){return e.scrollTo(i)}),t.preventDefault())}},{name:"show",self:!0,handler:function(){dn=dn||{x:ai.pageXOffset,y:ai.pageYOffset},"reveal"!==this.mode||Lt(this.panel,this.clsMode)||(Q(this.panel,"<div>"),Pt(this.panel.parentNode,this.clsMode)),St(hi,"overflowY",(!this.clsContentAnimation||this.flip)&&this.scrollbarWidth&&this.overlay?"scroll":""),Pt(li.body,this.clsContainer+" "+this.clsFlip+" "+this.clsOverlay),sn(li.body),Pt(this.content,this.clsContentAnimation),Pt(this.panel,this.clsSidebarAnimation+" "+("reveal"!==this.mode?this.clsMode:"")),Pt(this.$el,this.clsOverlay),St(this.$el,"display","block"),sn(this.$el)}},{name:"hide",self:!0,handler:function(){Mt(this.content,this.clsContentAnimation);var t=this.getActive();("none"===this.mode||t&&t!==this&&t!==this.prev)&&Ut(this.panel,Vi)}},{name:"hidden",self:!0,handler:function(){if("reveal"===this.mode&&et(this.panel),this.overlay){if(!dn){var t=this.content,e=t.scrollLeft,i=t.scrollTop;dn={x:e,y:i}}}else dn={x:ai.pageXOffset,y:ai.pageYOffset};Mt(this.panel,this.clsSidebarAnimation+" "+this.clsMode),Mt(this.$el,this.clsOverlay),St(this.$el,"display",""),Mt(li.body,this.clsContainer+" "+this.clsFlip+" "+this.clsOverlay),li.body.scrollTop=dn.y,St(hi,"overflow-y",""),rn(this.content,""),sn(this.content,""),ai.scrollTo(dn.x,dn.y),dn=null}},{name:"swipeLeft swipeRight",handler:function(t){this.isToggled()&&Te(t)&&("swipeLeft"===t.type&&!this.flip||"swipeRight"===t.type&&this.flip)&&this.hide()}}]})},Hn=function(t){t.component("responsive",{props:["width","height"],init:function(){Pt(this.$el,"uk-responsive-width")},update:{read:function(){this.dim=!!(Y(this.$el)&&this.width&&this.height)&&{width:rn(this.$el.parentNode),height:this.height}},write:function(){this.dim&&sn(this.$el,yi.contain({height:this.height,width:this.width},this.dim).height)},events:["load","resize"]}})},zn=function(t){function e(t){return.5*(1-Math.cos(Math.PI*t))}t.component("scroll",{props:{duration:Number,offset:Number},defaults:{duration:1e3,offset:0},methods:{scrollTo:function(t){var i=this,n=ce(t=t&&ot(t)||li.body).top-this.offset,o=sn(li),s=sn(ai);if(n+s>o&&(n=o-s),Ut(this.$el,"beforescroll",[this,t])){var r=Date.now(),a=ai.pageYOffset,l=function(){var o=a+(n-a)*e(N((Date.now()-r)/i.duration));ai.scrollTo(ai.pageXOffset,o),o!==n?Mi(l):Ut(i.$el,"scrolled",[i,t])};l()}}},events:{click:function(t){t.defaultPrevented||(t.preventDefault(),this.scrollTo($t(this.$el.hash).substr(1)))}}})},Ln=function(t){t.component("scrollspy",{args:"cls",props:{cls:"list",target:String,hidden:Boolean,offsetTop:Number,offsetLeft:Number,repeat:Boolean,delay:Number},defaults:{cls:["uk-scrollspy-inview"],target:!1,hidden:!0,offsetTop:0,offsetLeft:0,repeat:!1,delay:0,inViewClass:"uk-scrollspy-inview"},computed:{elements:function(t,e){var i=t.target;return i?st(i,e):[e]}},update:[{write:function(){this.hidden&&St(ft(this.elements,":not(."+this.inViewClass+")"),"visibility","hidden")}},{read:function(){var e=this;if(!t._initialized)return!1;this.elements.forEach(function(t){if(!t._scrollspy){var i=_t(t,"uk-scrollspy-class");t._scrollspy={toggles:i&&i.split(",")||e.cls}}t._scrollspy.show=j(t,e.offsetTop,e.offsetLeft)})},write:function(){var t=this,e=1===this.elements.length?1:0;this.elements.forEach(function(i,n){var o=i._scrollspy,s=o.toggles[n]||o.toggles[0];if(o.show){if(!o.inview&&!o.timer){var r=function(){St(i,"visibility",""),Pt(i,t.inViewClass),jt(i,s),Ut(i,"inview"),t.$update(),o.inview=!0,delete o.timer};t.delay&&e?o.timer=setTimeout(r,t.delay*e):r(),e++}}else o.inview&&t.repeat&&(o.timer&&(clearTimeout(o.timer),delete o.timer),St(i,"visibility",t.hidden?"hidden":""),Mt(i,t.inViewClass),jt(i,s),Ut(i,"outview"),t.$update(),o.inview=!1)})},events:["scroll","load","resize"]}]})},jn=function(t){t.component("scrollspy-nav",{props:{cls:String,closest:String,scroll:Boolean,overflow:Boolean,offset:Number},defaults:{cls:"uk-active",closest:!1,scroll:!1,overflow:!0,offset:0},computed:{links:function(t,e){return st('a[href^="#"]',e).filter(function(t){return t.hash})},elements:function(){return this.closest?gt(this.links,this.closest):this.links},targets:function(){return st(this.links.map(function(t){return t.hash}).join(","))}},update:[{read:function(){this.scroll&&t.scroll(this.links,{offset:this.offset||0})}},{read:function(){var t=this,e=ai.pageYOffset+this.offset+1,i=sn(li)-sn(ai)+this.offset;this.active=!1,this.targets.every(function(n,o){var s=ce(n).top,r=o+1===t.targets.length;if(!t.overflow&&(0===o&&s>e||r&&s+n.offsetTop<e))return!1;if(!r&&ce(t.targets[o+1]).top<=e)return!0;if(e>=i)for(var a=t.targets.length-1;a>o;a--)if(j(t.targets[a])){n=t.targets[a];break}return!(t.active=ot(ft(t.links,'[href="#'+n.id+'"]')))})},write:function(){this.links.forEach(function(t){return t.blur()}),Mt(this.elements,this.cls),this.active&&Ut(this.$el,"active",[this.active,Pt(this.closest?gt(this.active,this.closest):this.active,this.cls)])},events:["scroll","load","resize"]}]})},Wn=function(t){t.component("sticky",{mixins:[pn],attrs:!0,props:{top:null,bottom:Boolean,offset:Number,animation:String,clsActive:String,clsInactive:String,clsFixed:String,clsBelow:String,selTarget:String,widthElement:"query",showOnUp:Boolean,media:"media",target:Number},defaults:{top:0,bottom:!1,offset:0,animation:"",clsActive:"uk-active",clsInactive:"",clsFixed:"uk-sticky-fixed",clsBelow:"uk-sticky-below",selTarget:"",widthElement:!1,showOnUp:!1,media:!1,target:!1},computed:{selTarget:function(t,e){var i=t.selTarget;return i&&ot(i,e)||e}},connected:function(){this.placeholder=ot('<div class="uk-sticky-placeholder"></div>'),this.widthElement=this.$props.widthElement||this.placeholder,this.isActive||this.hide()},disconnected:function(){this.isActive&&(this.isActive=!1,this.hide(),Mt(this.$el,this.clsInactive)),K(this.placeholder),this.placeholder=null,this.widthElement=null},ready:function(){var t=this;if(this.target&&location.hash&&ai.pageYOffset>0){var e=ot(location.hash);e&&Mi(function(){var i=ce(e).top,n=ce(t.$el).top,o=t.$el.offsetHeight;n+o>=i&&n<=i+e.offsetHeight&&ai.scrollTo(0,i-o-t.target-t.offset)})}},events:[{name:"active",self:!0,handler:function(){zt(this.selTarget,this.clsInactive,this.clsActive)}},{name:"inactive",self:!0,handler:function(){zt(this.selTarget,this.clsActive,this.clsInactive)}}],update:[{write:function(){var t,e=this,i=this.placeholder,n=(this.isActive?i:this.$el).offsetHeight;St(i,ri({height:"absolute"!==St(this.$el,"position")?n:""},St(this.$el,["marginTop","marginBottom","marginLeft","marginRight"]))),dt(i,hi)||(G(this.$el,i),_t(i,"hidden","")),_t(this.widthElement,"hidden",null),this.width=this.widthElement.offsetWidth,_t(this.widthElement,"hidden",this.isActive?null:""),this.topOffset=ce(this.isActive?i:this.$el).top,this.bottomOffset=this.topOffset+n,["top","bottom"].forEach(function(i){e[i]=e.$props[i],e[i]&&(y(e[i])?e[i]=e[i+"Offset"]+_(e[i]):v(e[i])&&e[i].match(/^-?\d+vh$/)?e[i]=sn(ai)*_(e[i])/100:(t=!0===e[i]?e.$el.parentNode:at(e[i],e.$el))&&(e[i]=ce(t).top+t.offsetHeight))}),this.top=Math.max(_(this.top),this.topOffset)-this.offset,this.bottom=this.bottom&&this.bottom-n,this.inactive=this.media&&!ai.matchMedia(this.media).matches,this.isActive&&this.update()},events:["load","resize"]},{read:function(t){var e=t.scrollY;void 0===e&&(e=ai.pageYOffset),this.offsetTop=ce(this.$el).top,this.scroll=e,this.visible=Y(this.$el)},write:function(t){var e=this;void 0===t&&(t={});var i=t.dir,n=this.scroll;if(!(n<0||!this.visible||this.disabled||this.showOnUp&&!i))if(this.inactive||n<this.top||this.showOnUp&&(n<=this.top||"down"===i||"up"===i&&!this.isActive&&n<=this.bottomOffset)){if(!this.isActive)return;this.isActive=!1,this.animation&&n>this.topOffset?(vi.cancel(this.$el),vi.out(this.$el,this.animation).then(function(){return e.hide()},D)):this.hide()}else this.isActive?this.update():this.animation?(vi.cancel(this.$el),this.show(),vi.in(this.$el,this.animation).catch(D)):this.show()},events:["scroll"]}],methods:{show:function(){this.isActive=!0,this.update(),_t(this.placeholder,"hidden",null)},hide:function(){this.isActive&&!Lt(this.selTarget,this.clsActive)||Ut(this.$el,"inactive"),Mt(this.$el,this.clsFixed,this.clsBelow),St(this.$el,{position:"",top:"",width:""}),_t(this.placeholder,"hidden","")},update:function(){var t=Math.max(0,this.offset),e=this.scroll>this.top;this.bottom&&this.scroll>this.bottom-this.offset&&(t=this.bottom-this.scroll),St(this.$el,{position:"fixed",top:t+"px",width:this.width}),Lt(this.selTarget,this.clsActive)?e||Ut(this.$el,"inactive"):e&&Ut(this.$el,"active"),jt(this.$el,this.clsBelow,this.scroll>this.bottomOffset),Pt(this.$el,this.clsFixed)}}})},Fn={},Rn=function(t){function e(t,e){if(!n[t]){n[t]={};for(var o;o=i.exec(t);)n[t][o[3]]='<svg xmlns="http://www.w3.org/2000/svg"'+o[1]+"svg>"}return n[t][e]}t.component("svg",{attrs:!0,props:{id:String,icon:String,src:String,style:String,width:Number,height:Number,ratio:Number,class:String},defaults:{ratio:1,id:!1,exclude:["src"],class:""},init:function(){this.class+=" uk-svg"},connected:function(){var t=this;if(!this.icon&&c(this.src,"#")){var i=this.src.split("#");i.length>1&&(this.src=i[0],this.icon=i[1])}this.svg=this.getSvg().then(function(i){var n;if(v(i)?(t.icon&&c(i,"<symbol")&&(i=e(i,t.icon)||i),n=ot(i.substr(i.indexOf("<svg")))):n=i.cloneNode(!0),!n)return Xe.reject("SVG not found.");var o=_t(n,"viewBox");o&&(o=o.split(" "),t.width=t.$props.width||o[2],t.height=t.$props.height||o[3]),t.width*=t.ratio,t.height*=t.ratio;for(var s in t.$options.props)t[s]&&!c(t.exclude,s)&&_t(n,s,t[s]);t.id||Et(n,"id"),t.width&&!t.height&&Et(n,"height"),t.height&&!t.width&&Et(n,"width");var r=t.$el;if(R(r)||"CANVAS"===r.tagName){_t(r,{hidden:!0,id:null});var a=r.nextElementSibling;a&&n.isEqualNode(a)?n=a:G(r,n)}else{var l=r.lastElementChild;l&&n.isEqualNode(l)?n=l:X(r,n)}return t.svgEl=n,n},D)},disconnected:function(){var t=this;R(this.$el)&&_t(this.$el,{hidden:null,id:this.id||null}),this.svg&&this.svg.then(function(e){return(!t._connected||e!==t.svgEl)&&K(e)},D),this.svg=this.svgEl=null},methods:{getSvg:function(){var t=this;return this.src?Fn[this.src]?Fn[this.src]:(Fn[this.src]=new Xe(function(e,i){l(t.src,"data:")?e(decodeURIComponent(t.src.split(",")[1])):P(t.src).then(function(t){return e(t.response)},function(){return i("SVG not found.")})}),Fn[this.src]):Xe.reject()}}});var i=/<symbol(.*?id=(['"])(.*?)\2[^]*?<\/)symbol>/g,n={}},Yn=function(t){t.component("switcher",{mixins:[gn],args:"connect",props:{connect:String,toggle:String,active:Number,swiping:Boolean},defaults:{connect:"~.uk-switcher",toggle:"> *",active:0,swiping:!0,cls:"uk-active",clsContainer:"uk-switcher",attrItem:"uk-switcher-item",queued:!0},computed:{connects:function(t,e){return lt(t.connect,e)},toggles:function(t,e){return st(t.toggle,e)}},events:[{name:"click",delegate:function(){return this.toggle+":not(.uk-disabled)"},handler:function(t){t.preventDefault(),this.show(t.current)}},{name:"click",el:function(){return this.connects},delegate:function(){return"["+this.attrItem+"],[data-"+this.attrItem+"]"},handler:function(t){t.preventDefault(),this.show(At(t.current,this.attrItem))}},{name:"swipeRight swipeLeft",filter:function(){return this.swiping},el:function(){return this.connects},handler:function(t){Te(t)&&(t.preventDefault(),ai.getSelection().toString()||this.show("swipeLeft"===t.type?"next":"previous"))}}],update:function(){var t=this;this.connects.forEach(function(e){return t.updateAria(e.children)}),this.show(ft(this.toggles,"."+this.cls)[0]||this.toggles[this.active]||this.toggles[0])},methods:{show:function(t){for(var e,i=this,n=this.toggles.length,o=!!this.connects.length&&nt(ft(this.connects[0].children,"."+this.cls)[0]),s=o>=0,r=F(t,this.toggles,o),a="previous"===t?-1:1,l=0;l<n;l++,r=(r+a+n)%n)if(!mt(i.toggles[r],".uk-disabled, [disabled]")){e=i.toggles[r];break}!e||o>=0&&Lt(e,this.cls)||o===r||(Mt(this.toggles,this.cls),_t(this.toggles,"aria-expanded",!1),Pt(e,this.cls),_t(e,"aria-expanded",!0),this.connects.forEach(function(t){s?i.toggleElement([t.children[o],t.children[r]]):i.toggleNow(t.children[r])}))}}})},Vn=function(t){t.component("tab",t.components.switcher.extend({mixins:[pn],name:"tab",props:{media:"media"},defaults:{media:960,attrItem:"uk-tab-item"},init:function(){var e=Lt(this.$el,"uk-tab-left")?"uk-tab-left":!!Lt(this.$el,"uk-tab-right")&&"uk-tab-right";e&&t.toggle(this.$el,{cls:e,mode:"media",media:this.media})}}))},qn=function(t){t.component("toggle",{mixins:[t.mixin.togglable],args:"target",props:{href:String,target:null,mode:"list",media:"media"},defaults:{href:!1,target:!1,mode:"click",queued:!0,media:!1},computed:{target:function(t,e){var i=t.href,n=t.target;return n=lt(n||i,e),n.length&&n||[e]}},events:[{name:Ri+" "+Yi,filter:function(){return c(this.mode,"hover")},handler:function(t){Te(t)||this.toggle("toggle"+(t.type===Ri?"show":"hide"))}},{name:"click",filter:function(){return c(this.mode,"click")||Li},handler:function(t){if(Te(t)||c(this.mode,"click")){var e;(gt(t.target,'a[href="#"], button')||(e=gt(t.target,"a[href]"))&&(this.cls||!Y(this.target)||e.hash&&mt(this.target,e.hash)))&&t.preventDefault(),this.toggle()}}}],update:{write:function(){if(c(this.mode,"media")&&this.media){var t=this.isToggled(this.target);(ai.matchMedia(this.media).matches?!t:t)&&this.toggle()}},events:["load","resize"]},methods:{toggle:function(t){Ut(this.target,t||"toggle",[this])&&this.toggleElement(this.target)}}})},Un=function(t){t.component("video",{props:{automute:Boolean,autoplay:Boolean},defaults:{automute:!1,autoplay:!0},ready:function(){this.player=new Ki(this.$el),this.automute&&this.player.mute()},update:{write:function(){this.player&&(Y(this.$el)&&"hidden"!==St(this.$el,"visibility")?this.autoplay&&this.player.play():this.player.pause())},events:["load"]}})};cn.version="3.0.0-beta.35",function(t){t.mixin.class=pn,t.mixin.container=mn,t.mixin.modal=vn,t.mixin.position=wn,t.mixin.togglable=gn}(cn),function(t){var e=0,i=0;Yt(ai,"load resize",t.update),Yt(ai,"scroll",function(i){i.dir=e<=ai.pageYOffset?"down":"up",i.scrollY=e=ai.pageYOffset,t.update(i)}),qi&&Yt(li,qi,function(t){var e=t.target;(St(e,"animationName")||"").match(/^uk-.*(left|right)/)&&(i++,li.body.style.overflowX="hidden",setTimeout(function(){--i||(li.body.style.overflowX="")},A(St(e,"animationDuration"))+100))},!0),t.use(qn),t.use(yn),t.use(bn),t.use(Un),t.use(xn),t.use(kn),t.use($n),t.use(_n),t.use(Cn),t.use(An),t.use(Sn),t.use(Dn),t.use(Tn),t.use(En),t.use(Nn),t.use(On),t.use(Bn),t.use(Pn),t.use(Mn),t.use(Hn),t.use(zn),t.use(Ln),t.use(jn),t.use(Wn),t.use(Rn),t.use(In),t.use(Yn),t.use(Vn)}(cn);var Xn=function(t){var e=t.util.css,i={slide:{show:function(t){return[{transform:Ne(-100*t)},{transform:Ne()}]},percent:function(t){return i.translated(t)},translate:function(t,e){return[{transform:Ne(-100*e*t)},{transform:Ne(100*e*(1-t))}]}},translated:function(t){return Math.abs(e(t,"transform").split(",")[4]/t.offsetWidth)}};return i},Jn=function(t){var e=t.mixin,i=t.util,n=i.assign,o=i.css;return n({},e.slideshow.defaults.Animations,{fade:{show:function(){return[{opacity:0},{opacity:1}]},percent:function(t){return 1-o(t,"opacity")},translate:function(t){return[{opacity:1-t},{opacity:t}]}},scale:{show:function(){return[{opacity:0,transform:De(.8)},{opacity:1,transform:De(1)}]},percent:function(t){return 1-o(t,"opacity")},translate:function(t){return[{opacity:1-t,transform:De(1-.2*t)},{opacity:t,transform:De(.8+.2*t)}]}}})},Gn=function(t){var e=t.mixin,i=t.util,n=i.assign,o=i.css,s=n({},e.slideshow.defaults.Animations,{fade:{show:function(){return[{opacity:0,zIndex:0},{zIndex:-1}]},percent:function(t){return 1-o(t,"opacity")},translate:function(t){return[{opacity:1-t,zIndex:0},{zIndex:-1}]}},scale:{show:function(){return[{opacity:0,transform:De(1.5),zIndex:0},{zIndex:-1}]},percent:function(t){return 1-o(t,"opacity")},translate:function(t){return[{opacity:1-t,transform:De(1+.5*t),zIndex:0},{zIndex:-1}]}},pull:{show:function(t){return t<0?[{transform:Ne(30),zIndex:-1},{transform:Ne(),zIndex:0}]:[{transform:Ne(-100),zIndex:0},{transform:Ne(),zIndex:-1}]},percent:function(t,e,i){return i<0?1-s.translated(e):s.translated(t)},translate:function(t,e){return e<0?[{transform:Ne(30*t),zIndex:-1},{transform:Ne(-100*(1-t)),zIndex:0}]:[{transform:Ne(100*-t),zIndex:0},{transform:Ne(30*(1-t)),zIndex:-1}]}},push:{show:function(t){return t<0?[{transform:Ne(100),zIndex:0},{transform:Ne(),zIndex:-1}]:[{transform:Ne(-30),zIndex:-1},{transform:Ne(),zIndex:0}]},percent:function(t,e,i){return i>0?1-s.translated(e):s.translated(t)},translate:function(t,e){return e<0?[{transform:Ne(100*t),zIndex:0},{transform:Ne(-30*(1-t)),zIndex:-1}]:[{transform:Ne(-30*t),zIndex:-1},{transform:Ne(100*(1-t)),zIndex:0}]}}});return s};return cn.use(Se),cn.use(Ie),cn.use(Be),cn.use(Pe),cn.use(Me),cn.use(He),cn.use(ze),cn.use(Le),cn.use(je),function(t){function e(){i(li.body,n),Xi.flush(),new Pi(function(e){return e.forEach(function(e){for(var s=e.addedNodes,r=e.removedNodes,a=e.target,l=0;l<s.length;l++)i(s[l],n);for(l=0;l<r.length;l++)i(r[l],o);t.update(Xt("update",!0,!1,{mutation:!0}),a,!0)})}).observe(hi,{childList:!0,subtree:!0,characterData:!0,attributes:!0,attributeFilter:["href"]}),t._initialized=!0}function i(t,e){if(1===t.nodeType&&!Tt(t,"uk-no-boot"))for(e(t),t=t.firstElementChild;t;){var n=t.nextElementSibling;i(t,e),t=n}}var n=t.connect,o=t.disconnect;Pi?li.body?e():new Pi(function(){li.body&&(this.disconnect(),e())}).observe(hi,{childList:!0,subtree:!0}):H(function(){i(li.body,n),Yt(hi,"DOMNodeInserted",function(t){return i(t.target,n)}),Yt(hi,"DOMNodeRemoved",function(t){return i(t.target,o)})})}(cn),cn});
module.exports = { render: function(c) { } }
</script>
