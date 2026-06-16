(function(){
 var m = document.getElementById('scraped-mega-menu');
 var b = document.getElementById('radix-_R_33b_');
 if (!m || !b || m.dataset.fx) return;
 m.dataset.fx = '1';
 m.innerHTML = '<div data-side="bottom" data-align="start" role="menu" data-slot="dropdown-menu-content" class="text-popover-foreground z-50 min-w-[8rem] overflow-x-hidden overflow-y-auto rounded-md p-1 w-48 bg-white border-2 border-blue-300 shadow-xl" tabindex="-1" style="outline:none;pointer-events:auto"><div class="px-2 py-1.5 text-sm text-blue-900 font-semibold">Công ty</div><div class="-mx-1 my-1 h-px bg-blue-300"></div><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/about/">Về chúng tôi</a><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/rd/">Năng lực R&amp;D</a><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/factory/">Nhà máy</a><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/sustainability/">Sustainability</a><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/careers/">Tuyển dụng</a><a class="flex items-center gap-2 px-2 py-1.5 text-sm text-gray-700 hover:text-blue-900 hover:bg-blue-50 rounded-sm cursor-pointer" href="/contact/">Liên hệ</a></div>';
 b.className = 'mega-menu-trigger inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm disabled:pointer-events-none disabled:opacity-50 h-9 px-4 py-2 text-gray-700 hover:text-blue-700 hover:bg-blue-50 font-medium transition-all';
 var t;
 b.onmouseenter = function() {
  clearTimeout(t);
  var r = b.getBoundingClientRect();
  m.style.cssText = 'display:block;position:fixed;left:' + r.left + 'px!important;top:' + (r.bottom + 4) + 'px!important;transform:none!important;z-index:50';
 };
 b.onmouseleave = function() {
  t = setTimeout(function() {
   if (!m.matches(':hover')) m.classList.add('hidden');
  }, 200);
 };
 m.onmouseenter = function() { clearTimeout(t); };
 m.onmouseleave = function() { m.classList.add('hidden'); };
})();
