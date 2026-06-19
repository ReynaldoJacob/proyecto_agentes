<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&amp;family=Manrope:wght@400;500;600&amp;family=Hanken+Grotesk:wght@500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-bright": "#f9f9ff",
                        "inverse-primary": "#9ccaff",
                        "surface-variant": "#dde2f3",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed-variant": "#4c4733",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#414750",
                        "tertiary-container": "#5d5843",
                        "surface": "#f9f9ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-container": "#d7ceb4",
                        "background": "#f9f9ff",
                        "surface-container": "#e8eeff",
                        "secondary-fixed": "#aeedf7",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#ecf0ff",
                        "surface-container-highest": "#dde2f3",
                        "secondary-fixed-dim": "#92d1da",
                        "surface-tint": "#12629d",
                        "tertiary-fixed": "#ebe2c8",
                        "primary-fixed-dim": "#9ccaff",
                        "on-error": "#ffffff",
                        "secondary": "#25676f",
                        "error": "#ba1a1a",
                        "outline": "#717781",
                        "tertiary": "#45412d",
                        "surface-dim": "#d4daea",
                        "on-tertiary-fixed": "#1f1c0b",
                        "on-background": "#161c27",
                        "primary-fixed": "#d0e4ff",
                        "tertiary-fixed-dim": "#cec6ad",
                        "on-secondary-fixed": "#001f23",
                        "outline-variant": "#c1c7d1",
                        "on-surface": "#161c27",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#2c6d76",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#00497a",
                        "primary-container": "#005b96",
                        "secondary-container": "#aeedf7",
                        "on-primary-fixed": "#001d35",
                        "surface-container-high": "#e3e8f9",
                        "on-secondary-fixed-variant": "#004f57",
                        "on-primary-container": "#abd2ff",
                        "primary": "#004370",
                        "surface-container-low": "#f1f3ff",
                        "inverse-surface": "#2a303d"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    spacing: {
                        "margin-desktop": "64px",
                        "lg": "48px",
                        "base": "4px",
                        "sm": "16px",
                        "gutter": "24px",
                        "xs": "8px",
                        "md": "24px",
                        "margin-mobile": "16px",
                        "xl": "80px",
                        "section-gap": "120px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "label-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Manrope"],
                        "body-md": ["Manrope"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "headline-md": ["24px", {lineHeight: "32px", fontWeight: "600"}],
                        "headline-lg": ["32px", {lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700"}],
                        "headline-xl": ["48px", {lineHeight: "56px", letterSpacing: "-0.02em", fontWeight: "700"}],
                        "label-sm": ["12px", {lineHeight: "16px", fontWeight: "500"}],
                        "label-md": ["14px", {lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "600"}],
                        "body-lg": ["18px", {lineHeight: "28px", fontWeight: "400"}],
                        "body-md": ["16px", {lineHeight: "24px", fontWeight: "400"}],
                        "headline-lg-mobile": ["28px", {lineHeight: "36px", letterSpacing: "-0.01em", fontWeight: "700"}]
                    }
                }
            }
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .property-card-shadow {
            box-shadow: 0 12px 32px rgba(0, 91, 150, 0.08);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface overflow-x-hidden">
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/80 dark:bg-surface-container-highest/80 shadow-sm border-b border-outline-variant/10">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <a class="font-headline-lg text-headline-lg-mobile md:text-headline-md text-primary dark:text-primary-fixed-dim tracking-tight" href="#">
                Margarita Flores
                <span class="block text-label-sm font-label-sm text-on-surface-variant dark:text-outline-variant tracking-widest uppercase mt-1">Asesora Inmobiliaria</span>
            </a>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-md text-label-md text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 transition-all duration-300 active:scale-95" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-all duration-300 active:scale-95" href="/properties">Propiedades</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-all duration-300 active:scale-95" href="#contacto">Contacto</a>
                <button class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md transition-all hover:opacity-90 active:scale-95">Consulta Gratis</button>
            </div>
            <button class="md:hidden text-primary" aria-label="Abrir menu">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </nav>

    <header class="relative min-h-[90vh] flex items-center pt-20">
        <div class="absolute inset-0 z-0">
            <img alt="Luxury Home Interior" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQ_kFUXxVPjfwfVGxLrK5gf-gcdDdqOoYO7e3A_ScgBr2N-hPa-XVivEdDeh-iHeUWXvEDSt-q2PheOloVc44bhlUw0WkT6V9uehzQ_d1x3j8cdwWgC69JXUaI8tbHmVWxLHniV-UMhJ1k4m4h-kuV5YQIXzRutucrFTicT3y1y1zowqHSICW1zhPpbaIdo8_cbJ-DZig-SZLHnP47IjygYwgKq8d93uLRhXmOUDTaMHQQjW-LYmMVY9-se_gy4V2_8ksevVmcMh8">
            <div class="absolute inset-0 bg-gradient-to-r from-background/95 via-background/60 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
            <div class="max-w-2xl">
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-on-surface mb-6 leading-tight">Tu proximo capitulo comienza aqui</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 leading-relaxed">Te acompano en cada paso del camino para comprar, vender o rentar tu propiedad con la seguridad y confianza que mereces. Encuentra tu santuario personal.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/properties" class="inline-block bg-primary text-on-primary px-10 py-4 rounded-xl font-label-md text-lg transition-all hover:shadow-lg hover:shadow-primary/20 active:scale-95 text-center">Ver Propiedades</a>
                    <button class="border-2 border-primary-container text-primary-container px-10 py-4 rounded-xl font-label-md text-lg transition-all hover:bg-primary-container/5 active:scale-95">Agenda una Cita</button>
                </div>
            </div>
        </div>
    </header>

    <section class="py-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="text-center mb-16">
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Propiedades Destacadas</h2>
            <div class="w-16 h-1.5 bg-primary-container rounded-full mx-auto mb-6"></div>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">Haz clic sobre cualquier propiedad para ver su galeria de fotos y detalles completos.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden property-card-shadow group cursor-pointer transition-transform duration-500 hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Residencial Marina View" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfUif6n9QfoOkLm4AtjAORrf9fg6-uqtf3aaQsKxalFTsHdR9PGaqUcurUllP30z4eUGsma3a9HHVghbhnvxV-_gcfOFQPq0IDWAMqUOVZxCWXl0fhhxrByXj7zfpwQRkcv6QRFW7tUzRORhQ18nrHC6g99iT_jWf8sD-9YT8FgCTS3qClj42muwby46xcvR5JkyvSHdb9z_Lo5uYftt5Wr2ELnAX_4LSM02yyANXMkawbfSM9-ZetiwApyEh8XGL9ea0j0Rnuk2c">
                    <div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full font-label-md">$4,200,000 MXN</div>
                </div>
                <div class="p-6">
                    <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-2 block">Marina Mazatlan</span>
                    <h3 class="font-headline-md text-headline-md mb-4 text-on-surface">Residencial Marina View</h3>
                    <div class="flex justify-between items-center py-4 border-t border-outline-variant/30">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bed</span>
                            <span class="font-label-sm text-on-surface-variant">3 Hab.</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bathtub</span>
                            <span class="font-label-sm text-on-surface-variant">2.5 Banos</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">straighten</span>
                            <span class="font-label-sm text-on-surface-variant">210 m2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden property-card-shadow group cursor-pointer transition-transform duration-500 hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Departamento Contemporaneo" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdqbNhL_U6ZfN1QUnMP-2Fj9EEzsE7-K3KnYwBkGBprqarpS5NiW5jQvee8dNuVDROhnRatTkSKRp_NqPXNh9t4TZTxyZoCIcef9zCiA9zf4dUzMk--mreCc7P9eCuQol0btOYaYb4_lqudz2Ahm7lPdmMb-TbHJRhksSWsbCXUIbWpdXxuoLxbeYLpnYY1KPC1OoaKOJZjLpb_aBLgJ7CwUQvZpSN5IgomamDaAjKN5I-vIJU2CdOKrJvh8hEoXwLvjdae68m_dw">
                    <div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full font-label-md">$2,850,000 MXN</div>
                </div>
                <div class="p-6">
                    <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-2 block">Centro Historico</span>
                    <h3 class="font-headline-md text-headline-md mb-4 text-on-surface">Depto. Contemporaneo</h3>
                    <div class="flex justify-between items-center py-4 border-t border-outline-variant/30">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bed</span>
                            <span class="font-label-sm text-on-surface-variant">2 Hab.</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bathtub</span>
                            <span class="font-label-sm text-on-surface-variant">2 Banos</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">straighten</span>
                            <span class="font-label-sm text-on-surface-variant">95 m2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden property-card-shadow group cursor-pointer transition-transform duration-500 hover:-translate-y-2">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Villa de Playa Pacific" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj9VexsuJhV5WxDeF4qB0jH9uqETipCdpDHyJ33X0eAbt1CBwDVBbd-alk6xdj2HE3AK5NWEgcPL1DsTq5r-bzAqMJ6WlhjIbTAwDLzKhgWAMUttzdjU8iuoBnlZ9MEP_TL6dVlLrNfeyBVC8VA2FFg4SbdJXHVo0BA_BSobx_ONz6hsk9-UZpTvBiyYRyREoCV-l0I_6eJHP6Agd5w1ahFsk2C8N3iNqWSmGqTH6uDIOmPtaBt3oBRy2s1yyCtKV4TiMXPvky5xA">
                    <div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full font-label-md">$6,900,000 MXN</div>
                </div>
                <div class="p-6">
                    <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-2 block">Zona Cerritos</span>
                    <h3 class="font-headline-md text-headline-md mb-4 text-on-surface">Villa de Playa Pacific</h3>
                    <div class="flex justify-between items-center py-4 border-t border-outline-variant/30">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bed</span>
                            <span class="font-label-sm text-on-surface-variant">4 Hab.</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">bathtub</span>
                            <span class="font-label-sm text-on-surface-variant">4.5 Banos</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-primary-container mb-1">straighten</span>
                            <span class="font-label-sm text-on-surface-variant">340 m2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-surface-container py-section-gap overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 rounded-3xl overflow-hidden aspect-[4/5] property-card-shadow">
                        <img alt="Margarita Flores Portrait" class="w-full h-full object-cover" src="/images/agent-profile.jpeg">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-primary-container rounded-full opacity-10 blur-3xl"></div>
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-secondary-container rounded-full opacity-20 blur-3xl"></div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-8">Por que elegirme como tu asesora?</h2>
                    <div class="space-y-8">
                        <div class="flex gap-6 items-start">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">verified</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-label-md text-on-surface mb-2">Asesoria Certificada</h4>
                                <p class="font-body-md text-on-surface-variant leading-relaxed">Cuento con las credenciales y experiencia necesarias para garantizar una transaccion segura y profesional.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">psychology</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-label-md text-on-surface mb-2">Vision Estrategica</h4>
                                <p class="font-body-md text-on-surface-variant leading-relaxed">Analizo el mercado para ofrecerte las mejores oportunidades de inversion y el valor real de tu propiedad.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">favorite</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-label-md text-on-surface mb-2">Trato Personalizado</h4>
                                <p class="font-body-md text-on-surface-variant leading-relaxed">Tu tranquilidad es mi prioridad. Te acompano de forma humana y cercana en todo el proceso.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="bg-inverse-surface rounded-[3rem] p-8 md:p-16 flex flex-col md:flex-row justify-between items-center gap-12 overflow-hidden relative">
            <div class="absolute inset-0 bg-primary/5 pointer-events-none"></div>
            <div class="w-full md:w-3/5 text-center md:text-left relative z-10">
                <span class="font-label-md text-secondary-fixed tracking-[0.2em] uppercase mb-4 block">Listo para dar el paso?</span>
                <h2 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-inverse-on-surface mb-6">Ponte en contacto conmigo</h2>
                <p class="font-body-lg text-body-lg text-outline-variant mb-10 max-w-lg">Estoy disponible para resolver tus dudas, agendar una cita o ayudarte a evaluar el valor de mercado de tu inmueble sin compromiso.</p>
                <div class="flex flex-col sm:flex-row gap-8 items-center md:items-start">
                    <div class="flex items-center gap-4 group">
                        <div class="w-14 h-14 rounded-full bg-surface-variant/10 flex items-center justify-center text-inverse-on-surface border border-outline-variant/20 transition-all group-hover:bg-primary-container">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div class="text-left">
                            <p class="font-label-sm text-outline-variant">Llamada Directa</p>
                            <p class="font-headline-md text-headline-md text-inverse-on-surface">+52 669 110 5734</p>
                        </div>
                    </div>
                    <a class="inline-flex items-center gap-3 bg-[#25D366] text-white px-8 py-4 rounded-full font-label-md hover:shadow-xl hover:scale-105 transition-all" href="#">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.417-.003 6.557-5.338 11.892-11.893 11.892-1.997-.001-3.951-.5-5.688-1.448l-6.305 1.652zm6.599-3.835c1.523.904 3.13 1.379 4.799 1.38h.003c5.739 0 10.409-4.669 10.412-10.411.002-2.78-1.082-5.393-3.056-7.368-1.973-1.973-4.585-3.055-7.366-3.056-5.738 0-10.402 4.663-10.405 10.41-.001 1.838.48 3.633 1.391 5.219l-1.054 3.847 3.934-1.032zm11.367-7.643c-.31-.155-1.837-.906-2.114-1.006-.277-.1-.478-.15-.678.15s-.777.906-.951 1.106-.349.225-.658.07c-.31-.155-1.307-.482-2.49-1.537-.919-.82-1.539-1.833-1.719-2.143-.18-.31-.019-.477.136-.631.14-.139.31-.35.465-.526.155-.175.206-.299.309-.499.103-.2.052-.375-.026-.531-.077-.156-.678-1.636-.93-2.241-.244-.59-.493-.51-.678-.519-.175-.009-.375-.01-.575-.01s-.526.075-.801.375c-.275.3-.1.575-1.1.575-1.2.75-.525 1.45.1 2.225.5 3.3 1.425 6.488 4.412 8.412 1.45.925 1.9 1.1 2.73 1.18.26.024.448.006.712-.032.274-.038.835-.342 1.052-.942s.217-1.112.15-1.226c-.067-.114-.247-.181-.557-.336z"></path></svg>
                        Chat en WhatsApp
                    </a>
                </div>
            </div>
            <div class="w-full md:w-2/5 bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm relative z-10">
                <div class="relative w-24 h-24 mx-auto mb-6">
                    <div class="absolute inset-0 bg-primary rounded-full scale-125 blur-xl opacity-20"></div>
                    <img alt="Margarita Flores Small" class="w-full h-full rounded-full object-cover border-2 border-primary-fixed-dim relative z-10" src="/images/agent-profile.jpeg">
                </div>
                <div class="text-center">
                    <h3 class="font-headline-md text-headline-md text-inverse-on-surface mb-1">Margarita Flores</h3>
                    <p class="font-label-md text-primary-fixed-dim mb-4 uppercase tracking-wider text-xs">Asesora Inmobiliaria Certificada</p>
                    <p class="font-body-md italic text-outline-variant leading-relaxed">"Tu patrimonio en las mejores manos."</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-surface-container-low dark:bg-surface-container-lowest w-full border-t border-outline-variant/30">
        <div class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-xl max-w-container-max mx-auto">
            <div class="mb-8 md:mb-0">
                <a class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed-dim block mb-4 tracking-tight" href="#">Margarita Flores</a>
                <p class="font-label-sm text-label-sm text-on-surface-variant">© 2024 Margarita Flores. Real Estate Sanctuary.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                <a class="font-label-md text-label-sm text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors" href="#">Privacy Policy</a>
                <a class="font-label-md text-label-sm text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors" href="#">Terms of Service</a>
                <a class="font-label-md text-label-sm text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors" href="#">Listings</a>
                <a class="font-label-md text-label-sm text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors" href="#">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', () => {
            const scroll = window.pageYOffset;
            const heroImg = document.querySelector('header img');
            if (heroImg) {
                heroImg.style.transform = `translateY(${scroll * 0.2}px)`;
            }
        });

        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.property-card-shadow').forEach((card) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.8s cubic-bezier(0.22, 1, 0.36, 1)';
            observer.observe(card);
        });
    </script>
</body>
</html>
