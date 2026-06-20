// ═══════════════════════════════════════
        //  DATA
        // ═══════════════════════════════════════
        

        // ═══════════════════════════════════════
        //  STATE
        // ═══════════════════════════════════════
        let cart = [];
        let promoMode = 'discount';
        let currentCategory = 'all';

        // ═══════════════════════════════════════
        //  HELPERS
        // ═══════════════════════════════════════
        function fmt(n) { return 'Rp' + n.toLocaleString('id-ID'); }
        function findProduct(id) { for (const s of MENU_SECTIONS) { const f = s.items.find(p => p.id === id); if (f) return f; } return null; }

        // ═══════════════════════════════════════
        //  CATEGORY FILTER
        // ═══════════════════════════════════════
        function renderFilters() {
            const container = document.getElementById('category-filters');
            const categories = [{ id: 'all', title: 'All Menu' }, ...MENU_SECTIONS.filter(s => !s.hidden)];
            container.innerHTML = categories.map(c => `
            <button onclick="setCategory('${c.id}')" id="btn-cat-${c.id}" class="promo-btn ${currentCategory === c.id ? 'active-promo' : ''} px-4 py-2 sm:px-5 sm:py-2.5 rounded-full text-[10px] sm:text-xs font-bold tracking-wide transition-all">
                ${c.title.toUpperCase()}
            </button>
        `).join('');
        }

        function setCategory(id) {
            currentCategory = id;
            document.querySelectorAll('#category-filters .promo-btn').forEach(b => b.classList.remove('active-promo'));
            document.getElementById(`btn-cat-${id}`).classList.add('active-promo');
            renderMenu();
        }

        // ═══════════════════════════════════════
        //  RENDER MENU
        // ═══════════════════════════════════════
        function renderMenu() {
            const container = document.getElementById('menu-sections');
            const filteredSections = currentCategory === 'all'
                ? MENU_SECTIONS.filter(s => !s.hidden)
                : MENU_SECTIONS.filter(s => !s.hidden && s.id === currentCategory);

            container.innerHTML = filteredSections.map((section, sIdx) => {
                const visibleItems = section.items.filter(p => !p.hidden);
                if (visibleItems.length === 0) return '';
                const cards = visibleItems.map(p => {
                    const discounted = Math.round(p.price / 2);
                    const isBogo = promoMode === 'bogo' && p.bogo;
                    const inCart = cart.find(c => c.id === p.id && c.mode === promoMode);
                    const qty = inCart ? inCart.qty : 0;
                    return `
                <div class="card-row flex items-center gap-4 p-4 rounded-2xl group reveal">
                    <div class="relative w-20 h-20 sm:w-24 sm:h-24 rounded-xl overflow-hidden flex-shrink-0 bg-[#111] border border-white/5 group-hover:border-orange-500/30 transition-colors">
                        <img src="${p.img}" alt="${p.name}" class="card-img w-full h-full object-cover opacity-70 transition-transform duration-500" loading="lazy" />
                        <div class="absolute inset-0 bg-orange-500/10 mix-blend-overlay opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        ${isBogo
                            ? `<div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent flex items-end justify-center pb-2"><span class="text-[8px] font-black tracking-[0.2em] uppercase text-orange-300 bg-orange-500/20 border border-orange-500/40 px-2.5 py-1 rounded-full shadow-[0_0_10px_rgba(249,115,22,0.3)]">BOGO</span></div>`
                            : `<div class="absolute top-2 left-2 px-2 py-1 rounded-md bg-orange-500/20 border border-orange-500/40 text-[9px] font-black tracking-wider uppercase text-orange-400 shadow-[0_0_10px_rgba(249,115,22,0.2)] backdrop-blur-sm">-50%</div>`
                        }
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-[15px] font-bold tracking-tight mb-1 leading-tight pr-2">${p.name}</h3>
                        <p class="text-[11px] text-neutral-600 mb-2.5 line-clamp-2 leading-relaxed pr-2">${p.desc}</p>
                        <div class="flex items-center gap-2 flex-wrap">
                            ${isBogo
                            ? `<span class="text-[15px] font-black text-grad-fire">${fmt(p.price)}</span><span class="text-[10px] text-orange-400/60 font-medium">untuk 2 cup</span>`
                            : `<span class="text-[15px] font-black text-grad-fire">${fmt(discounted)}</span><span class="price-slash text-[11px] text-neutral-600 font-medium">${fmt(p.price)}</span>`
                        }
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        ${qty === 0
                            ? `<button onclick="addToCart(${p.id})" class="add-btn flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 text-white shadow-lg shadow-orange-500/20 hover:shadow-orange-500/40 hover:scale-105 transition-all"><i data-lucide="plus" class="w-4 h-4"></i></button>`
                            : `<div class="flex items-center gap-1">
                                <button onclick="changeQty(${p.id}, -1)" class="add-btn w-9 h-9 rounded-lg bg-white/[0.05] border border-white/[0.08] flex items-center justify-center text-neutral-400 hover:text-white hover:bg-white/10 transition-all text-sm font-bold">−</button>
                                <span class="w-8 text-center text-sm font-bold text-white">${qty}</span>
                                <button onclick="changeQty(${p.id}, 1)" class="add-btn w-9 h-9 rounded-lg bg-orange-500 flex items-center justify-center text-white hover:bg-orange-400 transition-all text-sm font-bold">+</button>
                               </div>`
                        }
                    </div>
                </div>`;
                }).join('');

                return `
            <div class="mb-12 last:mb-0">
                <div class="flex items-center gap-3 mb-5 reveal">
                    <div class="w-8 h-8 rounded-lg bg-orange-500/10 border border-orange-500/15 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="${section.icon}" class="w-4 h-4 text-orange-500"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold tracking-tight">${section.title}</h3>
                        <p class="text-[11px] text-neutral-600">${section.subtitle}</p>
                    </div>
                </div>
                <div class="flex flex-col gap-3 stagger-children">${cards}</div>
            </div>
            ${sIdx < filteredSections.length - 1 ? '<div class="my-10 reveal"><div class="line-glow"></div></div>' : ''}`;
            }).join('');
            lucide.createIcons();
            initScrollReveal();
        }

        // ═══════════════════════════════════════
        //  CART LOGIC
        // ═══════════════════════════════════════
        function addToCart(id) {
            const p = findProduct(id); if (!p) return;
            const ex = cart.find(c => c.id === id && c.mode === promoMode);
            if (ex) ex.qty++; else cart.push({ ...p, qty: 1, mode: promoMode });
            updateCartUI(); renderMenu();
            showToast(`${p.name} ditambahkan`);
        }
        function changeQty(id, d) {
            const i = cart.findIndex(c => c.id === id && c.mode === promoMode); if (i === -1) return;
            cart[i].qty += d; if (cart[i].qty <= 0) cart.splice(i, 1);
            updateCartUI(); renderMenu();
        }
        function removeFromCart(id) { cart = cart.filter(c => c.id !== id); updateCartUI(); renderMenu(); }
        function getCartTotal() { return cart.reduce((s, i) => s + ((i.mode === 'bogo' && i.bogo) ? i.price * i.qty : Math.round(i.price / 2) * i.qty), 0); }
        function getCartCount() { return cart.reduce((s, i) => s + i.qty, 0); }

        function updateCartUI() {
            const badge = document.getElementById('cart-badge');
            const count = getCartCount();
            if (count > 0) { badge.classList.remove('hidden'); badge.classList.add('flex'); badge.textContent = count; }
            else { badge.classList.add('hidden'); badge.classList.remove('flex'); }

            const container = document.getElementById('cart-items');
            const footerEl = document.getElementById('cart-footer');
            const totalEl = document.getElementById('cart-total');

            if (cart.length === 0) {
                container.innerHTML = `<div class="flex flex-col items-center justify-center h-full text-center"><i data-lucide="shopping-bag" class="w-10 h-10 text-neutral-800 mb-3"></i><p class="text-neutral-600 text-sm">Keranjang masih kosong</p><p class="text-neutral-700 text-xs mt-1">Pilih menu untuk mulai order</p></div>`;
                footerEl.classList.add('hidden'); lucide.createIcons(); return;
            }

            footerEl.classList.remove('hidden');
            totalEl.textContent = fmt(getCartTotal());
            container.innerHTML = cart.map(item => {
                const isBogo = item.mode === 'bogo' && item.bogo;
                const price = isBogo ? item.price : Math.round(item.price / 2);
                const label = isBogo ? `${fmt(price)} <span class="text-[10px] text-orange-400/60">(2 cup)</span>` : fmt(price);
                const tag = isBogo
                    ? '<span class="text-[9px] font-bold tracking-wider uppercase text-orange-400 bg-orange-500/20 border border-orange-500/30 px-2 py-0.5 rounded-full">BOGO</span>'
                    : '<span class="text-[9px] font-bold tracking-wider uppercase text-orange-400 bg-orange-500/20 border border-orange-500/30 px-2 py-0.5 rounded-full">-50%</span>';
                return `
            <div class="flex gap-3 p-3 rounded-xl bg-white/[0.02] border border-white/[0.04] mb-3">
                <img src="${item.img}" alt="${item.name}" class="w-14 h-14 rounded-lg object-cover opacity-80 flex-shrink-0" />
                <div class="flex-1 min-w-0">
                    <div class="flex items-start justify-between gap-2 mb-1">
                        <h4 class="text-sm font-semibold tracking-tight truncate">${item.name}</h4>
                        <button onclick="removeFromCart(${item.id})" class="flex-shrink-0 p-1 rounded hover:bg-white/5 text-neutral-600 hover:text-red-400 transition-colors"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
                    </div>
                    <div class="mb-2">${tag}</div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-grad-fire">${label}</span>
                        <div class="flex items-center gap-1">
                            <button onclick="changeQty(${item.id}, -1)" class="w-7 h-7 rounded-lg bg-white/[0.04] hover:bg-white/[0.08] flex items-center justify-center text-neutral-500 hover:text-white transition-colors text-xs font-bold">−</button>
                            <span class="w-7 text-center text-xs font-bold">${item.qty}</span>
                            <button onclick="changeQty(${item.id}, 1)" class="w-7 h-7 rounded-lg bg-white/[0.04] hover:bg-white/[0.08] flex items-center justify-center text-neutral-500 hover:text-white transition-colors text-xs font-bold">+</button>
                        </div>
                    </div>
                </div>
            </div>`;
            }).join('');
            lucide.createIcons();
        }

        // ═══════════════════════════════════════
        //  CART DRAWER
        // ═══════════════════════════════════════
        function toggleCart(open) {
            const overlay = document.getElementById('cart-overlay');
            const drawer = document.getElementById('cart-drawer');
            if (open) {
                overlay.classList.remove('hidden');
                requestAnimationFrame(() => { overlay.classList.remove('opacity-0'); overlay.classList.add('opacity-100'); drawer.classList.remove('translate-x-full'); });
                document.body.style.overflow = 'hidden';
            } else {
                overlay.classList.remove('opacity-100'); overlay.classList.add('opacity-0');
                drawer.classList.add('translate-x-full');
                setTimeout(() => overlay.classList.add('hidden'), 300);
                document.body.style.overflow = '';
            }
        }

        // ═══════════════════════════════════════
        //  CHECKOUT
        // ═══════════════════════════════════════
        function checkoutWhatsApp() {
            if (!cart.length) return;
            const total = getCartTotal();
            let msg = '🧋 *Order Tomoro Coffee*\n\n';
            cart.forEach(i => {
                const isBogo = i.mode === 'bogo' && i.bogo;
                const price = isBogo ? i.price : Math.round(i.price / 2);
                msg += `• ${i.name} x${i.qty} ${isBogo ? '(BOGO - 2 cup)' : '(Diskon 50%)'}\n  ${fmt(price * i.qty)}\n`;
            });
            msg += `\n💰 *Total: ${fmt(total)}*\n\nMohon konfirmasi order saya. Terima kasih! 🙏`;
            window.open(`https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(msg)}`, '_blank');
        }

        // ═══════════════════════════════════════
        //  TOAST
        // ═══════════════════════════════════════
        let toastTimer;
        function showToast(text) {
            const t = document.getElementById('toast');
            document.getElementById('toast-text').textContent = text;
            clearTimeout(toastTimer);
            t.classList.remove('opacity-0', 'translate-y-4'); t.classList.add('opacity-100', 'translate-y-0');
            toastTimer = setTimeout(() => { t.classList.remove('opacity-100', 'translate-y-0'); t.classList.add('opacity-0', 'translate-y-4'); }, 2000);
        }

        // ═══════════════════════════════════════
        //  SCROLL REVEAL (Intersection Observer)
        // ═══════════════════════════════════════
        function initScrollReveal() {
            const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .stagger-children');
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
            els.forEach(el => obs.observe(el));
        }

        // ═══════════════════════════════════════
        //  PARALLAX ON SCROLL
        // ═══════════════════════════════════════
        function initParallax() {
            const els = document.querySelectorAll('[data-speed]');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        const scrollY = window.scrollY;
                        els.forEach(el => {
                            const speed = parseFloat(el.dataset.speed) || 0.03;
                            const rect = el.getBoundingClientRect();
                            const offset = (rect.top + scrollY - window.innerHeight / 2) * speed;
                            el.style.transform = `translateY(${offset}px)`;
                        });
                        ticking = false;
                    });
                    ticking = true;
                }
            });
        }

        // ═══════════════════════════════════════
        //  NAVBAR SCROLL
        // ═══════════════════════════════════════
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 80) {
                nav.style.background = 'rgba(5,5,5,0.85)';
                nav.style.backdropFilter = 'blur(24px)';
                nav.style.borderBottom = '1px solid rgba(255,255,255,0.04)';
            } else {
                nav.style.background = 'transparent';
                nav.style.backdropFilter = 'none';
                nav.style.borderBottom = '1px solid transparent';
            }
        });

        // ═══════════════════════════════════════
        //  INIT
        // ═══════════════════════════════════════
        document.addEventListener('DOMContentLoaded', async () => {
            lucide.createIcons();
            
            // Mengambil data produk langsung dari PHP (config.php)
            // Variables MENU_SECTIONS and WHATSAPP_NUMBER are defined in index.php

            renderFilters();
            renderMenu();
            updateCartUI();
            initScrollReveal();
            initParallax();
        });