<?php
/**
 *
 * Template Name: Test-3-Books
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; wp_reset_query(); ?>

<style>
:root {
  font-size: 20px;
}

*, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body, input {
  font-family: "Hind", sans-serif;
  font-size: 1em;
}

body {
  background-color: #ccc;
  height: 100vh;
  margin: 0;
}

input {
  position: absolute;
}

input[type=radio] {
  top: -20px;
  left: -20px;
}
input[type=radio]:checked ~ input[type=reset] {
  visibility: visible;
}

input[type=reset] {
  background-color: #012712;
  /*border: 0;
  border-radius: 0;*/
  color: #fff;
  padding: 1px 5px;
  bottom: 5%;
  left: 50%;
  visibility: hidden;
  transform: translateX(-50%);
  transition: background-color 0.2s;
  -webkit-appearance: none;
  appearance: none;
	border-radius: 5px;
}
input[type=reset]:hover, input[type=reset]:focus {
  background-color: #055f2d;
}
input[type=reset]:active {
  background-color: #09a04c;
}

.container {
  animation: fadeIn 0.25s 0.25s linear forwards;
  display: flex;
  margin: auto;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  perspective: 800px;
  transform-style: preserve-3d;
}

.surface {
  display: block;
  width: 384px;
  height: 224px;
  margin: auto;
  transform-style: preserve-3d;
  transform: translateY(152px) rotateX(80deg) rotateZ(0deg);
  transition: transform 0.25s;
  will-change: transform;
}

.block {
  display: none;
  transform-style: preserve-3d;
  position: absolute;
  bottom: 0;
}

.block-inner div {
  /*display: flex;*/
  flex-wrap: wrap;
  align-content: flex-start;
  position: absolute;
  width: 16px;
  height: 16px;
}

.block-inner {
  position: relative;
  width: 16px;
  transition: transform 0.25s linear;
  transform-style: preserve-3d;
  transform: rotateX(-90deg) translateZ(16px);
}

.back {
  transform: translateZ(-16px) rotateY(180deg);
}

.left {
  transform-origin: center left;
  transform: rotateY(270deg) translateX(-16px);
}

.right {
  transform-origin: top right;
}
.right::after, .right div {
  top: 0;
  left: 0;
  transform-origin: 0 50%;
  transition: transform 0.25s 0.25s linear;
}
.right::after {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  color: #fff;
  font-size: 24px;
  line-height: 24px;
  text-align: center;
  padding: 20% 5%;
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.right div {
  width: 100%;
  height: 100%;
}

.top, .bottom {
  transform-origin: top center;
}

.spine, .right::after, .contents h1 {
  font-family: "Lora", serif;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
}

.spine {
  background: transparent;
  color: #ccc;
  font-size: 12px;
  line-height: 12px;
  top: 0;
  left: 0;
  transform: rotate(90deg) translate(12px, -50%);
  white-space: nowrap;
  width: 0;
  height: 16px;
}

.cover {
  background-color: #fff;
  z-index: 1;
}

.contents {
  font-size: 11.2px;
  padding: 16px;
}
.contents h1 {
  font-size: 2em;
	text-align: center;
}
.contents p {
  font-family: "Source Sans Pro", serif;
	text-align: center;
}

.b1 {
  display: block;
  transform: translate3d(16px, -224px, 16px);
}
.b1 .block-inner > div {
  background-color: #441e12;
}
.b1 .block-inner > div.top, .b1 .block-inner > div.bottom {
  width: 352px;
  height: 224px;
}
.b1 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-208px);
}
.b1 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-208px) translateZ(16px);
}
.b1 .block-inner > div.front::before, .b1 .block-inner > div.back::before, .b1 .block-inner > div.left::before, .b1 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b1 .block-inner > div.front, .b1 .block-inner > div.back {
  width: 352px;
  height: 16px;
}
.b1 .block-inner > div.front::before, .b1 .block-inner > div.back::before {
  opacity: 0.2;
}
.b1 .block-inner > div.front {
  transform: translateZ(208px);
}
.b1 .block-inner > div.left, .b1 .block-inner > div.right {
  width: 224px;
  height: 16px;
}
.b1 .block-inner > div.left::before, .b1 .block-inner > div.right::before {
  opacity: 0.4;
}
.b1 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, 128px);
  transform-style: preserve-3d;
}

.b2 {
  display: block;
  transform: translate3d(0px, -224px, 288px);
}
.b2 .block-inner > div {
  background-color: #441e12;
}
.b2 .block-inner > div.top, .b2 .block-inner > div.bottom {
  width: 384px;
  height: 16px;
}
.b2 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(0px);
}
.b2 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(0px) translateZ(288px);
}
.b2 .block-inner > div.front::before, .b2 .block-inner > div.back::before, .b2 .block-inner > div.left::before, .b2 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b2 .block-inner > div.front, .b2 .block-inner > div.back {
  width: 384px;
  height: 288px;
}
.b2 .block-inner > div.front::before, .b2 .block-inner > div.back::before {
  opacity: 0.2;
}
.b2 .block-inner > div.front {
  transform: translateZ(0px);
}
.b2 .block-inner > div.left, .b2 .block-inner > div.right {
  width: 16px;
  height: 288px;
}
.b2 .block-inner > div.left::before, .b2 .block-inner > div.right::before {
  opacity: 0.4;
}
.b2 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, 368px);
  transform-style: preserve-3d;
}

.b3 {
  display: block;
  transform: translate3d(0px, -208px, 288px);
}
.b3 .block-inner > div {
  background-color: #441e12;
}
.b3 .block-inner > div.top, .b3 .block-inner > div.bottom {
  width: 16px;
  height: 208px;
}
.b3 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-192px);
}
.b3 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-192px) translateZ(288px);
}
.b3 .block-inner > div.front::before, .b3 .block-inner > div.back::before, .b3 .block-inner > div.left::before, .b3 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b3 .block-inner > div.front, .b3 .block-inner > div.back {
  width: 16px;
  height: 288px;
}
.b3 .block-inner > div.front::before, .b3 .block-inner > div.back::before {
  opacity: 0.2;
}
.b3 .block-inner > div.front {
  transform: translateZ(192px);
}
.b3 .block-inner > div.left, .b3 .block-inner > div.right {
  width: 208px;
  height: 288px;
}
.b3 .block-inner > div.left::before, .b3 .block-inner > div.right::before {
  opacity: 0.4;
}
.b3 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -192px);
  transform-style: preserve-3d;
}

.b4 {
  display: block;
  transform: translate3d(368px, -208px, 288px);
}
.b4 .block-inner > div {
  background-color: #441e12;
}
.b4 .block-inner > div.top, .b4 .block-inner > div.bottom {
  width: 16px;
  height: 208px;
}
.b4 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-192px);
}
.b4 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-192px) translateZ(288px);
}
.b4 .block-inner > div.front::before, .b4 .block-inner > div.back::before, .b4 .block-inner > div.left::before, .b4 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b4 .block-inner > div.front, .b4 .block-inner > div.back {
  width: 16px;
  height: 288px;
}
.b4 .block-inner > div.front::before, .b4 .block-inner > div.back::before {
  opacity: 0.2;
}
.b4 .block-inner > div.front {
  transform: translateZ(192px);
}
.b4 .block-inner > div.left, .b4 .block-inner > div.right {
  width: 208px;
  height: 288px;
}
.b4 .block-inner > div.left::before, .b4 .block-inner > div.right::before {
  opacity: 0.4;
}
.b4 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -192px);
  transform-style: preserve-3d;
}

.b5 {
  display: block;
  transform: translate3d(0px, -224px, 304px);
}
.b5 .block-inner > div {
  background-color: #441e12;
}
.b5 .block-inner > div.top, .b5 .block-inner > div.bottom {
  width: 384px;
  height: 224px;
}
.b5 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-208px);
}
.b5 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-208px) translateZ(16px);
}
.b5 .block-inner > div.front::before, .b5 .block-inner > div.back::before, .b5 .block-inner > div.left::before, .b5 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b5 .block-inner > div.front, .b5 .block-inner > div.back {
  width: 384px;
  height: 16px;
}
.b5 .block-inner > div.front::before, .b5 .block-inner > div.back::before {
  opacity: 0.2;
}
.b5 .block-inner > div.front {
  transform: translateZ(208px);
}
.b5 .block-inner > div.left, .b5 .block-inner > div.right {
  width: 224px;
  height: 16px;
}
.b5 .block-inner > div.left::before, .b5 .block-inner > div.right::before {
  opacity: 0.4;
}
.b5 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, 160px);
  transform-style: preserve-3d;
}

.b6 {
  display: block;
  transform: translate3d(16px, -208px, 240px);
}
.b6 .block-inner > div {
  background-color: #c00000;
}
.b6 .block-inner > div.top, .b6 .block-inner > div.bottom {
  width: 32px;
  height: 176px;
}
.b6 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-160px);
}
.b6 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-160px) translateZ(224px);
}
.b6 .block-inner > div.front::before, .b6 .block-inner > div.back::before, .b6 .block-inner > div.left::before, .b6 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b6 .block-inner > div.front, .b6 .block-inner > div.back {
  width: 32px;
  height: 224px;
}
.b6 .block-inner > div.front::before, .b6 .block-inner > div.back::before {
  opacity: 0.2;
}
.b6 .block-inner > div.front {
  transform: translateZ(160px);
}
.b6 .block-inner > div.left, .b6 .block-inner > div.right {
  width: 176px;
  height: 224px;
}
.b6 .block-inner > div.left::before, .b6 .block-inner > div.right::before {
  opacity: 0;
}
.b6 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -144px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b6 .block-inner > div.right::after {
  background-color: #c00000;
  content: attr(data-title);
}
.b6 .block-inner > div.top, .b6 .block-inner > div.back, .b6 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b7 {
  display: block;
  transform: translate3d(48px, -208px, 256px);
}
.b7 .block-inner > div {
  background-color: #891a21;
}
.b7 .block-inner > div.top, .b7 .block-inner > div.bottom {
  width: 32px;
  height: 176px;
}
.b7 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-160px);
}
.b7 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-160px) translateZ(240px);
}
.b7 .block-inner > div.front::before, .b7 .block-inner > div.back::before, .b7 .block-inner > div.left::before, .b7 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b7 .block-inner > div.front, .b7 .block-inner > div.back {
  width: 32px;
  height: 240px;
}
.b7 .block-inner > div.front::before, .b7 .block-inner > div.back::before {
  opacity: 0.2;
}
.b7 .block-inner > div.front {
  transform: translateZ(160px);
}
.b7 .block-inner > div.left, .b7 .block-inner > div.right {
  width: 176px;
  height: 240px;
}
.b7 .block-inner > div.left::before, .b7 .block-inner > div.right::before {
  opacity: 0;
}
.b7 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -144px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b7 .block-inner > div.right::after {
  background-color: #891a21;
  content: attr(data-title);
}
.b7 .block-inner > div.top, .b7 .block-inner > div.back, .b7 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b8 {
  display: block;
  transform: translate3d(80px, -192px, 272px);
}
.b8 .block-inner > div {
  background-color: #bf3e22;
}
.b8 .block-inner > div.top, .b8 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b8 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b8 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(256px);
}
.b8 .block-inner > div.front::before, .b8 .block-inner > div.back::before, .b8 .block-inner > div.left::before, .b8 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b8 .block-inner > div.front, .b8 .block-inner > div.back {
  width: 32px;
  height: 256px;
}
.b8 .block-inner > div.front::before, .b8 .block-inner > div.back::before {
  opacity: 0.2;
}
.b8 .block-inner > div.front {
  transform: translateZ(144px);
}
.b8 .block-inner > div.left, .b8 .block-inner > div.right {
  width: 160px;
  height: 256px;
}
.b8 .block-inner > div.left::before, .b8 .block-inner > div.right::before {
  opacity: 0;
}
.b8 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b8 .block-inner > div.right::after {
  background-color: #bf3e22;
  content: attr(data-title);
}
.b8 .block-inner > div.top, .b8 .block-inner > div.back, .b8 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b9 {
  display: block;
  transform: translate3d(112px, -192px, 240px);
}
.b9 .block-inner > div {
  background-color: #0e4326;
}
.b9 .block-inner > div.top, .b9 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b9 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b9 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(224px);
}
.b9 .block-inner > div.front::before, .b9 .block-inner > div.back::before, .b9 .block-inner > div.left::before, .b9 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b9 .block-inner > div.front, .b9 .block-inner > div.back {
  width: 32px;
  height: 224px;
}
.b9 .block-inner > div.front::before, .b9 .block-inner > div.back::before {
  opacity: 0.2;
}
.b9 .block-inner > div.front {
  transform: translateZ(144px);
}
.b9 .block-inner > div.left, .b9 .block-inner > div.right {
  width: 160px;
  height: 224px;
}
.b9 .block-inner > div.left::before, .b9 .block-inner > div.right::before {
  opacity: 0;
}
.b9 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b9 .block-inner > div.right::after {
  background-color: #0e4326;
  content: attr(data-title);
}
.b9 .block-inner > div.top, .b9 .block-inner > div.back, .b9 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b10 {
  display: block;
  transform: translate3d(144px, -208px, 256px);
}
.b10 .block-inner > div {
  background-color: #0066cc;
}
.b10 .block-inner > div.top, .b10 .block-inner > div.bottom {
  width: 32px;
  height: 176px;
}
.b10 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-160px);
}
.b10 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-160px) translateZ(240px);
}
.b10 .block-inner > div.front::before, .b10 .block-inner > div.back::before, .b10 .block-inner > div.left::before, .b10 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b10 .block-inner > div.front, .b10 .block-inner > div.back {
  width: 32px;
  height: 240px;
}
.b10 .block-inner > div.front::before, .b10 .block-inner > div.back::before {
  opacity: 0.2;
}
.b10 .block-inner > div.front {
  transform: translateZ(160px);
}
.b10 .block-inner > div.left, .b10 .block-inner > div.right {
  width: 176px;
  height: 240px;
}
.b10 .block-inner > div.left::before, .b10 .block-inner > div.right::before {
  opacity: 0;
}
.b10 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -144px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b10 .block-inner > div.right::after {
  background-color: #0066cc;
  content: attr(data-title);
}
.b10 .block-inner > div.top, .b10 .block-inner > div.back, .b10 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b11 {
  display: block;
  transform: translate3d(176px, -208px, 272px);
}
.b11 .block-inner > div {
  background-color: #0f7b7e;
}
.b11 .block-inner > div.top, .b11 .block-inner > div.bottom {
  width: 32px;
  height: 176px;
}
.b11 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-160px);
}
.b11 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-160px) translateZ(256px);
}
.b11 .block-inner > div.front::before, .b11 .block-inner > div.back::before, .b11 .block-inner > div.left::before, .b11 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b11 .block-inner > div.front, .b11 .block-inner > div.back {
  width: 32px;
  height: 256px;
}
.b11 .block-inner > div.front::before, .b11 .block-inner > div.back::before {
  opacity: 0.2;
}
.b11 .block-inner > div.front {
  transform: translateZ(160px);
}
.b11 .block-inner > div.left, .b11 .block-inner > div.right {
  width: 176px;
  height: 256px;
}
.b11 .block-inner > div.left::before, .b11 .block-inner > div.right::before {
  opacity: 0;
}
.b11 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -144px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b11 .block-inner > div.right::after {
  background-color: #0f7b7e;
  content: attr(data-title);
}
.b11 .block-inner > div.top, .b11 .block-inner > div.back, .b11 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b12 {
  display: block;
  transform: translate3d(208px, -192px, 256px);
}
.b12 .block-inner > div {
  background-color: #084e6f;
}
.b12 .block-inner > div.top, .b12 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b12 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b12 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(240px);
}
.b12 .block-inner > div.front::before, .b12 .block-inner > div.back::before, .b12 .block-inner > div.left::before, .b12 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b12 .block-inner > div.front, .b12 .block-inner > div.back {
  width: 32px;
  height: 240px;
}
.b12 .block-inner > div.front::before, .b12 .block-inner > div.back::before {
  opacity: 0.2;
}
.b12 .block-inner > div.front {
  transform: translateZ(144px);
}
.b12 .block-inner > div.left, .b12 .block-inner > div.right {
  width: 160px;
  height: 240px;
}
.b12 .block-inner > div.left::before, .b12 .block-inner > div.right::before {
  opacity: 0;
}
.b12 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b12 .block-inner > div.right::after {
  background-color: #084e6f;
  content: attr(data-title);
}
.b12 .block-inner > div.top, .b12 .block-inner > div.back, .b12 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b13 {
  display: block;
  transform: translate3d(240px, -208px, 272px);
}
.b13 .block-inner > div {
  background-color: #0b0823;
}
.b13 .block-inner > div.top, .b13 .block-inner > div.bottom {
  width: 32px;
  height: 176px;
}
.b13 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-160px);
}
.b13 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-160px) translateZ(256px);
}
.b13 .block-inner > div.front::before, .b13 .block-inner > div.back::before, .b13 .block-inner > div.left::before, .b13 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b13 .block-inner > div.front, .b13 .block-inner > div.back {
  width: 32px;
  height: 256px;
}
.b13 .block-inner > div.front::before, .b13 .block-inner > div.back::before {
  opacity: 0.2;
}
.b13 .block-inner > div.front {
  transform: translateZ(160px);
}
.b13 .block-inner > div.left, .b13 .block-inner > div.right {
  width: 176px;
  height: 256px;
}
.b13 .block-inner > div.left::before, .b13 .block-inner > div.right::before {
  opacity: 0;
}
.b13 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -144px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b13 .block-inner > div.right::after {
  background-color: #0b0823;
  content: attr(data-title);
}
.b13 .block-inner > div.top, .b13 .block-inner > div.back, .b13 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b14 {
  display: block;
  transform: translate3d(272px, -192px, 240px);
}
.b14 .block-inner > div {
  background-color: #38103d;
}
.b14 .block-inner > div.top, .b14 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b14 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b14 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(224px);
}
.b14 .block-inner > div.front::before, .b14 .block-inner > div.back::before, .b14 .block-inner > div.left::before, .b14 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b14 .block-inner > div.front, .b14 .block-inner > div.back {
  width: 32px;
  height: 224px;
}
.b14 .block-inner > div.front::before, .b14 .block-inner > div.back::before {
  opacity: 0.2;
}
.b14 .block-inner > div.front {
  transform: translateZ(144px);
}
.b14 .block-inner > div.left, .b14 .block-inner > div.right {
  width: 160px;
  height: 224px;
}
.b14 .block-inner > div.left::before, .b14 .block-inner > div.right::before {
  opacity: 0;
}
.b14 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b14 .block-inner > div.right::after {
  background-color: #38103d;
  content: attr(data-title);
}
.b14 .block-inner > div.top, .b14 .block-inner > div.back, .b14 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b15 {
  display: block;
  transform: translate3d(304px, -192px, 256px);
}
.b15 .block-inner > div {
  background-color: #443344;
}
.b15 .block-inner > div.top, .b15 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b15 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b15 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(240px);
}
.b15 .block-inner > div.front::before, .b15 .block-inner > div.back::before, .b15 .block-inner > div.left::before, .b15 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b15 .block-inner > div.front, .b15 .block-inner > div.back {
  width: 32px;
  height: 240px;
}
.b15 .block-inner > div.front::before, .b15 .block-inner > div.back::before {
  opacity: 0.2;
}
.b15 .block-inner > div.front {
  transform: translateZ(144px);
}
.b15 .block-inner > div.left, .b15 .block-inner > div.right {
  width: 160px;
  height: 240px;
}
.b15 .block-inner > div.left::before, .b15 .block-inner > div.right::before {
  opacity: 0;
}
.b15 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b15 .block-inner > div.right::after {
  background-color: #443344;
  content: attr(data-title);
}
.b15 .block-inner > div.top, .b15 .block-inner > div.back, .b15 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

.b16 {
  display: block;
  transform: translate3d(336px, -192px, 272px);
}
.b16 .block-inner > div {
  background-color: #666777;
}
.b16 .block-inner > div.top, .b16 .block-inner > div.bottom {
  width: 32px;
  height: 160px;
}
.b16 .block-inner > div.top {
  transform: rotateX(-90deg) translateY(-144px);
}
.b16 .block-inner > div.bottom {
  transform: rotateX(-90deg) translateY(-144px) translateZ(256px);
}
.b16 .block-inner > div.front::before, .b16 .block-inner > div.back::before, .b16 .block-inner > div.left::before, .b16 .block-inner > div.right::before {
  background-color: #000;
  content: "";
  width: 100%;
  height: 100%;
}
.b16 .block-inner > div.front, .b16 .block-inner > div.back {
  width: 32px;
  height: 256px;
}
.b16 .block-inner > div.front::before, .b16 .block-inner > div.back::before {
  opacity: 0.2;
}
.b16 .block-inner > div.front {
  transform: translateZ(144px);
}
.b16 .block-inner > div.left, .b16 .block-inner > div.right {
  width: 160px;
  height: 256px;
}
.b16 .block-inner > div.left::before, .b16 .block-inner > div.right::before {
  opacity: 0;
}
.b16 .block-inner > div.right {
  transform: rotateY(-270deg) translate3d(16px, 0, -128px);
  transform-style: preserve-3d;
  background-color: #fff;
}
.b16 .block-inner > div.right::after {
  background-color: #666777;
  content: attr(data-title);
}
.b16 .block-inner > div.top, .b16 .block-inner > div.back, .b16 .block-inner > div.bottom {
  background-color: #fff;
  background-image: repeating-linear-gradient(90deg, transparent, transparent 21%, #aaa 21%, #aaa 25%, transparent 25%, transparent 46%, #aaa 46%, #aaa 50%, transparent 50%);
  background-size: 16px 16px;
}

/* Book Viewing */
label:nth-child(n+6):nth-child(-n+17):hover .block-inner {
  transform: rotateX(-90deg) translateZ(64px);
}

input[type=radio]:nth-child(1) ~ .surface label:nth-child(6) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(1):checked ~ .surface {
  transform: translate(41.6666666667%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(1):checked ~ .surface label:nth-child(6) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(1):checked ~ .surface label:nth-child(6) .block-inner:hover .right::after, input[type=radio]:nth-child(1):checked ~ .surface label:nth-child(6) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(2) ~ .surface label:nth-child(7) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(2):checked ~ .surface {
  transform: translate(33.3333333333%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(2):checked ~ .surface label:nth-child(7) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(2):checked ~ .surface label:nth-child(7) .block-inner:hover .right::after, input[type=radio]:nth-child(2):checked ~ .surface label:nth-child(7) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(3) ~ .surface label:nth-child(8) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(3):checked ~ .surface {
  transform: translate(25%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(3):checked ~ .surface label:nth-child(8) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(3):checked ~ .surface label:nth-child(8) .block-inner:hover .right::after, input[type=radio]:nth-child(3):checked ~ .surface label:nth-child(8) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(4) ~ .surface label:nth-child(9) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(4):checked ~ .surface {
  transform: translate(16.6666666667%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(4):checked ~ .surface label:nth-child(9) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(4):checked ~ .surface label:nth-child(9) .block-inner:hover .right::after, input[type=radio]:nth-child(4):checked ~ .surface label:nth-child(9) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(5) ~ .surface label:nth-child(10) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(5):checked ~ .surface {
  transform: translate(8.3333333333%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(5):checked ~ .surface label:nth-child(10) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(5):checked ~ .surface label:nth-child(10) .block-inner:hover .right::after, input[type=radio]:nth-child(5):checked ~ .surface label:nth-child(10) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(6) ~ .surface label:nth-child(11) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(6):checked ~ .surface {
  transform: translate(0%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(6):checked ~ .surface label:nth-child(11) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(6):checked ~ .surface label:nth-child(11) .block-inner:hover .right::after, input[type=radio]:nth-child(6):checked ~ .surface label:nth-child(11) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(7) ~ .surface label:nth-child(12) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(7):checked ~ .surface {
  transform: translate(-8.3333333333%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(7):checked ~ .surface label:nth-child(12) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(7):checked ~ .surface label:nth-child(12) .block-inner:hover .right::after, input[type=radio]:nth-child(7):checked ~ .surface label:nth-child(12) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(8) ~ .surface label:nth-child(13) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(8):checked ~ .surface {
  transform: translate(-16.6666666667%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(8):checked ~ .surface label:nth-child(13) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(8):checked ~ .surface label:nth-child(13) .block-inner:hover .right::after, input[type=radio]:nth-child(8):checked ~ .surface label:nth-child(13) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(9) ~ .surface label:nth-child(14) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(9):checked ~ .surface {
  transform: translate(-25%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(9):checked ~ .surface label:nth-child(14) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(9):checked ~ .surface label:nth-child(14) .block-inner:hover .right::after, input[type=radio]:nth-child(9):checked ~ .surface label:nth-child(14) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(10) ~ .surface label:nth-child(15) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(10):checked ~ .surface {
  transform: translate(-33.3333333333%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(10):checked ~ .surface label:nth-child(15) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(10):checked ~ .surface label:nth-child(15) .block-inner:hover .right::after, input[type=radio]:nth-child(10):checked ~ .surface label:nth-child(15) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

input[type=radio]:nth-child(11) ~ .surface label:nth-child(16) .block-inner {
  animation: returnBook 0.25s linear;
}

input[type=radio]:nth-child(11):checked ~ .surface {
  transform: translate(-41.6666666667%, 152px) rotateX(80deg) rotateZ(0deg);
}
input[type=radio]:nth-child(11):checked ~ .surface label:nth-child(16) .block-inner {
  animation: viewBook 0.25s 0.25s linear forwards;
}
input[type=radio]:nth-child(11):checked ~ .surface label:nth-child(16) .block-inner:hover .right::after, input[type=radio]:nth-child(11):checked ~ .surface label:nth-child(16) .block-inner:hover .cover {
  transform: rotateY(-135deg);
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes viewBook {
  from {
    transform: rotateX(-90deg) translateZ(64px) rotateY(0);
  }
  50% {
    transform: rotateX(-90deg) translateZ(240px) rotateY(0);
  }
  to {
    transform: rotateX(-90deg) translateZ(240px) rotateY(-90deg) rotateZ(-10deg) translateZ(-80px);
  }
}
@keyframes returnBook {
  from {
    transform: rotateX(-90deg) translateZ(240px) rotateY(-90deg) rotateZ(-10deg) translateZ(-80px);
  }
  50% {
    transform: rotateX(-90deg) translateZ(240px) rotateY(0);
  }
  to {
    transform: rotateX(-90deg) translateZ(16px) rotateY(0);
  }
}
</style>

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Hind'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lora'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro'>

<link rel="stylesheet" href="css/style-3d-books.css"

<form class="container">
  <input type="radio" name="title" id="book1"/>
  <input type="radio" name="title" id="book2"/>
  <input type="radio" name="title" id="book3"/>
  <input type="radio" name="title" id="book4"/>
  <input type="radio" name="title" id="book5"/>
  <input type="radio" name="title" id="book6"/>
  <input type="radio" name="title" id="book7"/>
  <input type="radio" name="title" id="book8"/>
  <input type="radio" name="title" id="book9"/>
  <input type="radio" name="title" id="book10"/>
  <input type="radio" name="title" id="book11"/>
  <div class="surface">
    <div class="block b1">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front"></div>
        <div class="left"></div>
        <div class="right"></div>
        <div class="top"></div>
      </div>
    </div>
    <div class="block b2">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front"></div>
        <div class="left"></div>
        <div class="right"></div>
        <div class="top"></div>
      </div>
    </div>
    <div class="block b3">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front"></div>
        <div class="left"></div>
        <div class="right"></div>
        <div class="top"></div>
      </div>
    </div>
    <div class="block b4">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front"></div>
        <div class="left"></div>
        <div class="right"></div>
        <div class="top"></div>
      </div>
    </div>
    <div class="block b5">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front"></div>
        <div class="left"></div>
        <div class="right"></div>
        <div class="top"></div>
      </div>
    </div>
    <label class="block b6" for="book1">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Avagadro's Number</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Avagadros's Number">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>N<sub>A </sub></i></h1><br>
            <p>6.02214076 × 10<sup>23</sup> 1/mol</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b7" for="book2">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Gravitational Constant</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Gravitational Constant">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>G</i></h1><br>
            <p>6.67408 × 10<sup>−11</sup> N⋅m<sup>2</sup>/kg<sup>2</sup></p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b8" for="book3">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Phi</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Phi">
          <div class="cover"></div>
          <div class="contents">
            <h1>Φ</h1><br>
            <p>1.618033988749</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b9" for="book4">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">PI</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="PI">
          <div class="cover"></div>
          <div class="contents">
            <h1>Π</h1><br>
            <p>3.141592653589</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b10" for="book5">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Speed of Light</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Speed of Light">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>c</i></h1><br>
            <p>299,792,458 m/s</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b11" for="book6">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Ideal Gas Constant</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Ideal Gas Constant">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>R</i></h1><br>
            <p>8.314462618  J/mol&#8901;K</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b12" for="book7">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Atmospheric Pressure</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Atmospheric Pressure">
          <div class="cover"></div>
          <div class="contents">
            <h1>atm</h1><br>
            <p>101,325 Pa</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b13" for="book8">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Planck Constant</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Planck Constant">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>h</i></h1><br>
            <p>6.62607015 × 10<sup>−34</sup> J&#8901;s</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b14" for="book9">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Elementary Charge</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Elementary Charge">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>e</i></h1><br>
            <p>1.602176634 × 10<sup>−19</sup> C</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b15" for="book10">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Subatomic Mass</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Subatomic Mass">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>m</i></h1><br>
            <p><i>m<sub>u</sub></i> atomic mass constant 1.660 × 10<sup>−27</sup> kg<br><br>
<i>m<sub>e</sub></i> electron mass 9.109 × 10<sup>−31</sup> kg<br><br>
<i>m<sub>p</sub></i> proton mass 1.672 × 10<sup>−27</sup> kg<br><br>
<i>m<sub>n</sub></i> neutron mass 1.674 × 10<sup>−27</sup> kg</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
    <label class="block b16" for="book11">
      <div class="block-inner">
        <div class="back"></div>
        <div class="bottom"></div>
        <div class="front">
          <div class="spine">Natural Logarithm</div>
        </div>
        <div class="left"></div>
        <div class="right" data-title="Natural Logarithm">
          <div class="cover"></div>
          <div class="contents">
            <h1><i>e</i></h1><br>
            <p>2.718281828459</p>
          </div>
        </div>
        <div class="top"></div>
      </div>
    </label>
  </div>
  <input type="reset" value="Return"/>
</form>

<?php get_footer(); ?>
