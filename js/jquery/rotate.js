jQuery.fn.rotate=function(e,t){var a=this.get(0);if(a.angle=t?e:((void 0==a.angle?0:a.angle)+e)%360,a.angle>=0)var h=Math.PI*a.angle/180;else var h=Math.PI*(360+a.angle)/180;var i=Math.cos(h),g=Math.sin(h);if(document.all&&!window.opera){var o=document.createElement("img");o.src=a.src,o.height=a.height,o.width=a.width,o.style.filter="progid:DXImageTransform.Microsoft.Matrix(M11="+i+",M12="+-g+",M21="+g+",M22="+i+",SizingMethod='auto expand')"}else{var o=document.createElement("canvas");a.oImage?o.oImage=a.oImage:(o.oImage=new Image,o.oImage.src=a.src),o.style.width=o.width=Math.abs(i*o.oImage.width)+Math.abs(g*o.oImage.height),o.style.height=o.height=Math.abs(i*o.oImage.height)+Math.abs(g*o.oImage.width);var r=o.getContext("2d");r.save(),h<=Math.PI/2?r.translate(g*o.oImage.height,0):h<=Math.PI?r.translate(o.width,-i*o.oImage.height):h<=1.5*Math.PI?r.translate(-i*o.oImage.width,o.height):r.translate(0,-g*o.oImage.width),r.rotate(h),r.drawImage(o.oImage,0,0,o.oImage.width,o.oImage.height),r.restore()}o.id=a.id,o.angle=a.angle,a.parentNode.replaceChild(o,a)},jQuery.fn.rotateRight=function(e){this.rotate(void 0==e?90:e)},jQuery.fn.rotateLeft=function(e){this.rotate(void 0==e?-90:-e)};