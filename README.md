# Css_introductioon

1.css Inroduction
=>CSS (Cascading Style Sheets) is a language used to style and layout web pages. It controls the visual appearance of HTML elements on a webpage. CSS is responsible for things like colors, fonts, spacing, and positioning of elements.

It allows developers to separate the structure (HTML) and design (CSS), making the code cleaner and more maintainable.

CSS হলো একটি ভাষা যা ওয়েব পেজের ডিজাইন এবং লেআউট নিয়ন্ত্রণ করতে ব্যবহৃত হয়। এটি HTML উপাদানের দৃশ্যমান উপস্থাপনাকে নিয়ন্ত্রণ করে, যেমন রঙ, ফন্ট, মার্জিন, এবং পজিশনিং।

CSS HTML এর কাঠামো (structure) এবং ডিজাইন (design) আলাদা করে, যা কোডটিকে পরিষ্কার এবং আরও রক্ষণাবেক্ষণযোগ্য করে তোলে।

Box Model: Every HTML element is considered a box. CSS helps define the size and position of these boxes, including:

Content: The actual content of the element (like text or images).

Padding: Space between the content and the border.

Border: The border around the element.

Margin: Space outside the border that separates the element from others.

=>বক্স মডেল (Box Model): প্রতিটি HTML উপাদান একটি বক্স হিসেবে গণ্য করা হয়। CSS দ্বারা আপনি এই বক্সগুলোর আকার এবং অবস্থান নির্ধারণ করতে পারেন, যেমন:

কনটেন্ট (Content): উপাদানের আসল কনটেন্ট (যেমন টেক্সট বা চিত্র)।

প্যাডিং (Padding): কনটেন্ট এবং বর্ডারের মধ্যে স্থান।

বর্ডার (Border): উপাদানের চারপাশে বর্ডার।

মার্জিন (Margin): বর্ডারের বাইরে অন্য উপাদানগুলির সাথে দূরত্ব।

Cascading: This refers to how CSS rules can override one another based on their specificity. For example, a style defined in an inline element will take priority over a style defined in a style block.

=>ক্যাসকেডিং (Cascading): CSS স্টাইলগুলো একে অপরকে অতিক্রম করতে পারে, যা সিলেক্টরের নির্দিষ্টতা অনুসারে কাজ করে। উদাহরণস্বরূপ, একটি ইনলাইন স্টাইল ব্লক দ্বারা সংজ্ঞায়িত স্টাইল একটি স্টাইল শীটের উপর প্রাধান্য পাবে।


2.How to add css
=>There are three main ways to add CSS to an HTML file:
 Inline CSS:Inline CSS is used to apply styles directly to a specific HTML element using the style attribute.

Internal CSS:Internal CSS is written inside a <style> tag within the <head> section of the HTML document.

 External CSS:External CSS involves creating a separate .css file and linking it to the HTML file. This is the most efficient and scalable method for styling multiple pages.

Link the CSS file in your HTML:In the <head> section of the HTML, use the <link> tag to reference the external CSS file.

CSS ওয়েব পেজে কীভাবে যোগ করবেন

HTML ফাইলে CSS যোগ করার তিনটি প্রধান উপায় আছে:

ইনলাইন CSS:

ইনলাইন CSS ব্যবহার করে একটি নির্দিষ্ট HTML উপাদানে স্টাইল প্রয়োগ করা হয় style অ্যাট্রিবিউট দিয়ে।

ইন্টারনাল CSS:

ইন্টারনাল CSS HTML ডকুমেন্টের <head> সেকশনে একটি <style> ট্যাগের মধ্যে লেখা হয়।

এক্সটার্নাল CSS:

এক্সটার্নাল CSS একটি আলাদা .css ফাইল তৈরি করে এবং সেটি HTML ফাইলের সাথে লিঙ্ক করা হয়। এটি সবচেয়ে কার্যকর এবং স্কেলেবল পদ্ধতি যখন আপনি একাধিক পেজ স্টাইল করতে চান।

সারাংশ:

ইনলাইন CSS একক উপাদানের জন্য, ইন্টারনাল CSS এক পেজের জন্য এবং এক্সটার্নাল CSS একাধিক পেজে একসাথে ব্যবহার করার জন্য উপযুক্ত।




3.Basic syntax
Basic Syntax of CSS

CSS syntax is composed of selectors, properties, and values. Here's a breakdown of the basic structure:

CSS Rule Set (Syntax):A CSS rule set consists of a selector and a declaration block. The declaration block contains properties and their corresponding values.

Selector:It can target HTML elements, such as p, h1, div, or even specific classes (.class-name) or IDs (#id-name).

Example of selectors:

Element selector: p { ... } targets all <p> elements.

Class selector: .button { ... } targets all elements with the class button.

ID selector: #header { ... } targets the element with the ID header.

Properties:Properties define what kind of style you want to apply to the selected element.
Common CSS properties include:

color: Sets the text color.

background-color: Sets the background color.

font-size: Defines the size of the font.

margin: Defines the space around an element.

padding: Defines the space between the content and the element's border.

Values:values specify the settings or measurements for each property.

They can be specific values like blue, 20px, center, or percentages (50%), color codes (#ff5733), etc.     

CSS Comments:You can add comments to your CSS code to explain or note something. Comments are ignored by the browser and do not affect the rendering of the page.
/* This is a comment */
p {
    color: blue; /* This sets the color of paragraph text to blue */
}
Summary:

Selector: Specifies the HTML element to apply styles.

Property: Defines the style to be applied (like color, font-size).

Value: Specifies the value for the property (like blue, 16px).

CSS মৌলিক সিনট্যাক্স

CSS সিনট্যাক্সে সিলেক্টর, প্রোপার্টি, এবং ভ্যালু থাকে। এখানে মৌলিক গঠনটি ব্যাখ্যা করা হলো:

CSS রুল সেট (সিনট্যাক্স):

একটি CSS রুল সেটে একটি সিলেক্টর এবং একটি ডিক্লারেশন ব্লক থাকে। ডিক্লারেশন ব্লকে প্রোপার্টি এবং তাদের মান ভ্যালু থাকে।
Selector (সিলেক্টর): এটি নির্দিষ্ট করে কোন HTML উপাদানকে CSS স্টাইল প্রযোজ্য হবে।

Property (প্রোপার্টি): এটি সেই স্টাইল বৈশিষ্ট্যকে নির্দিষ্ট করে (যেমন রঙ, ফন্ট-সাইজ ইত্যাদি)।

Value (ভ্যালু): প্রোপার্টির জন্য নির্দিষ্ট সেটিংস।

Selector (সিলেক্টর): p (এটি সমস্ত <p> ট্যাগে প্রযোজ্য হবে)।

Properties (প্রোপার্টি): color, font-size, এবং text-align।

Values (ভ্যালু): blue, 16px, এবং center।
সংক্ষেপে:

Selector (সিলেক্টর): HTML উপাদান নির্বাচন করে।

Property (প্রোপার্টি): কোন ধরনের স্টাইল প্রয়োগ করতে চান তা নির্দিষ্ট করে।

Value (ভ্যালু): প্রোপার্টির জন্য সেটিং নির্ধারণ করে।


4.selector

5.CSS Background Properties:-------------------------
background-color
background-image:use the url() function to link to an image file.
background-repeat:repeat | repeat-x | repeat-y | no-repeat;
repeat: The background image will repeat both horizontally and vertically.

repeat-x: The background image will repeat only horizontally.

repeat-y: The background image will repeat only vertically.

no-repeat: The background image will not repeat.

background-position:like left, center, right, top, bottom

background-size:cover and contain.

background-attachment:scroll | fixed | local;

croll: The background scrolls with the page (default behavior).

fixed: The background image stays fixed as you scroll.

local: The background image scrolls with the element's content (if the element is scrollable).

background (Shorthand):You can combine all the above properties using the background shorthand. This allows you to specify the background color, image, position, size, repeat behavior, and attachment in one declaration.

background-color: lightblue;

background-image: url('background.jpg');

background-repeat: no-repeat;

background-position: center center;

background-attachment: fixed;

background-color:

এটি একটি উপাদানের ব্যাকগ্রাউন্ডের রঙ নির্ধারণ করে।

background-image:

এটি উপাদানের ব্যাকগ্রাউন্ডে একটি ছবি সেট করে।

background-repeat:

এটি নির্ধারণ করে যে ব্যাকগ্রাউন্ড চিত্রটি পুনরাবৃত্তি হবে কি না।

background-position:

এটি ব্যাকগ্রাউন্ড ইমেজের অবস্থান নির্ধারণ করে।

background-size:

এটি ব্যাকগ্রাউন্ড ইমেজের আকার নির্ধারণ করে।

background-attachment:

এটি ব্যাকগ্রাউন্ড ইমেজের স্ক্রলিং আচরণ নির্ধারণ করে।

background (শর্টহ্যান্ড):

এই প্রোপার্টি দিয়ে একাধিক ব্যাকগ্রাউন্ড প্রোপার্টি একসাথে নির্ধারণ করা যায়।

CSS Border Properties::--------------------------------

In CSS, borders are used to define the edges of an element. You can control the border's width, style, and color using various CSS properties. Borders are commonly used to visually separate elements and add structure to web designs.

border (Shorthand):

2px: The width of the border.

solid: The style of the border (other styles are discussed below).

red: The color of the border.

border-width

The border-width property defines the thickness of the border. It can take values in pixels (px), ems (em), or other valid units.


border-style

The border-style property defines the style of the border. It can take several values:

solid: A solid, continuous line.

dotted: A series of dots.

dashed: A series of dashed lines.

double: Two solid lines.

none: No border (effectively hides the border).

border-color:The border-color property defines the color of the border. You can use color names, hex values, RGB values, etc.

border-radius

The border-radius property creates rounded corners for the border. You can specify a single value to apply the same radius to all corners, or you can specify different values for each corner.


border-top, border-right, border-bottom, border-left

These properties allow you to specify borders on individual sides of an element. They are shortcuts for defining the width, style, and color of a specific border.

border-image

The border-image property allows you to use an image as the border for an element. You can control how the image is stretched, repeated, or sliced to fit the borders.

Summary of Border Properties:---------------------------------------

border: Shorthand property to set width, style, and color.

border-width: Defines the thickness of the border.

border-style: Sets the style of the border (solid, dotted, dashed, etc.).

border-color: Defines the color of the border.

border-radius: Creates rounded corners for the element.

border-top, border-right, border-bottom, border-left: Set borders for individual sides.

border-image: Use an image as the border.

CSS display Property:::-------------------------------------------------
Summary of display Values:

block	Element behaves as a block-level element.	<div>, <p>, <h1>

inline	Element behaves as an inline element.	<span>, <a>, <strong>

inline-block	Behaves like an inline element but can have block-level properties.	Button-like elements in navigation bars

none	Element is not displayed and does not take up space.	Hiding elements dynamically (e.g., modals, menus)

flex	A flexible box container that aligns its children.	Layouts like rows, columns, or grids in modern web design

grid	A grid container that arranges items in rows and columns.	Complex page layouts with columns and rows

list-item	Element behaves like a list item.	<li>, custom list items


display প্রোপার্টির মূল মান:

block:

উপাদান ব্লক-লেভেল উপাদান হিসেবে প্রদর্শিত হয়। এটি একটি নতুন লাইন থেকে শুরু হয় এবং পুরো প্রস্থ নেয়।

inline:

উপাদান ইনলাইন উপাদান হিসেবে প্রদর্শিত হয়। এটি নতুন লাইন থেকে শুরু হয় না এবং শুধুমাত্র প্রয়োজনীয় জায়গা নেয়।

inline-block:

উপাদান ইনলাইন উপাদান হিসেবে প্রদর্শিত হয়, কিন্তু ব্লক-লেভেল বৈশিষ্ট্য গ্রহণ করতে পারে।

none:

উপাদানটি সম্পূর্ণভাবে দৃশ্যমান হয় না এবং কোনো জায়গা নেয় না।

flex:

এটি একটি নমনীয় কন্টেইনার তৈরি করে, যেখানে এর মধ্যে থাকা আইটেমগুলো নমনীয়ভাবে সাজানো হয়।

grid:

এটি একটি গ্রিড কন্টেইনার তৈরি করে, যেখানে আইটেমগুলো সঠিকভাবে কলাম এবং সারিতে সাজানো হয়।

list-item:

উপাদানটি একটি তালিকা আইটেম হিসেবে প্রদর্শিত হয়, যেমন একটি <li> উপাদান।


CSS cursor Property:::------------------------------------------------
The cursor property in CSS is used to change the appearance of the cursor (mouse pointer) when it hovers over an element. This property allows you to provide different visual cues to users, depending on the context of the element they're interacting with.

CSS cursor প্রোপার্টি

CSS এর cursor প্রোপার্টি ব্যবহার করা হয় যখন মাউস পয়েন্টার একটি উপাদানের উপর চলে আসে, তখন সেই উপাদানের জন্য কুরসরের ধরন পরিবর্তন করতে। এটি ব্যবহারকারীদের উদ্দেশ্য বুঝতে সাহায্য করে এবং তাদের অভিজ্ঞতা উন্নত করে।

cursor প্রোপার্টির মান:

default: সাধারণ তীর (অ্যাকশন ছাড়া সাধারণ উপাদানগুলির জন্য)।

pointer: হাতের চিহ্ন, যা ক্লিকযোগ্য উপাদানকে নির্দেশ করে (যেমন লিংক, বাটন)।

text: আই-বিম কুরসর, যা টেক্সট নির্বাচন করার জন্য ব্যবহার হয়।

wait: ঘণ্টা কাঁচি বা ঘূর্ণায়মান চিহ্ন, যা কিছু সময় ধরে চলছে তা নির্দেশ করে।

crosshair: ক্রসহার কুরসর, যা নির্ভুল পয়েন্টিংয়ের জন্য ব্যবহৃত হয়।

move: চার দিকের তীর কুরসর, যা উপাদানটিকে ড্র্যাগ করা সম্ভব তা নির্দেশ করে।

not-allowed: একটি ক্রস (না-অনুমোদিত) কুরসর, যা নিষিদ্ধ বা অকার্যকর অ্যাকশনের জন্য ব্যবহৃত হয়।

help: প্রশ্ন চিহ্ন কুরসর, যা সাহায্যের জন্য নির্দেশ করে।

zoom-in: মেগনিফাইং গ্লাস, যা ইনজুম করার জন্য ব্যবহৃত হয়।

zoom-out: মেগনিফাইং গ্লাস, যা আউটজুম করার জন্য ব্যবহৃত হয়।


CSS float Property::=----------------------------------------------------

The float property in CSS is used to position an element to the left or right within its container. The element is taken out of the normal document flow and is placed on the left or right, allowing other content (like text) to wrap around it.

left
right
none
inherit

