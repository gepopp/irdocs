<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Immobilien Redaktion Dokumentation</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @fluxAppearance
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2"/>

    <flux:brand href="#" logo="{{ asset('ir-icon.svg') }}" name="IR Dokumentation" class="max-lg:hidden dark:hidden"/>
    <flux:brand href="#" logo="{{ asset('ir-icon-dark.svg') }}" name="IR Dokumentation" class="max-lg:hidden! hidden dark:flex"/>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="home" href="https://immobilien-redaktion.com" target="_blank">Immobilien Redaktion</flux:navbar.item>
        <flux:navbar.item icon="question-mark-circle" href="#">FAQ</flux:navbar.item>
        <flux:navbar.item icon="inbox" href="#">Kontakt</flux:navbar.item>
    </flux:navbar>

    <flux:spacer/>

    <flux:navbar class="me-4">
        <flux:navbar.item icon="magnifying-glass" href="#" label="Search"/>
        <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings"/>
        <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help"/>
    </flux:navbar>

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="https://fluxui.dev/img/demo/user.png"/>

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                <flux:menu.radio>Truly Delta</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:header>

<flux:sidebar sticky collapsible="mobile" class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.header>
        <flux:sidebar.brand
                href="#"
                logo="https://fluxui.dev/img/demo/logo.png"
                logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png"
                name="Acme Inc."
        />

        <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2"/>
    </flux:sidebar.header>

    <flux:sidebar.nav>
        @foreach(\App\Models\Section::all() as $section)
            <flux:sidebar.item href="#" current>{{ $section->name }}</flux:sidebar.item>
        @endforeach
    </flux:sidebar.nav>

    <flux:sidebar.spacer/>

    <flux:sidebar.nav>
        <flux:sidebar.item icon="cog-6-tooth" href="#">Settings</flux:sidebar.item>
        <flux:sidebar.item icon="information-circle" href="#">Help</flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>

<flux:main container>
    <div class="flex max-md:flex-col items-start">
        <div class="w-full md:w-[220px] pb-4 me-10">
            <flux:navlist>
                @foreach(\App\Models\Section::all() as $section)
                    <flux:navlist.item href="#" current>{{ $section->name }}</flux:navlist.item>
                @endforeach
            </flux:navlist>
        </div>

        <flux:separator class="md:hidden"/>

        <div class="flex-1 max-md:pt-6 self-stretch">
            <article>
                <h1>Digitale Transformation der Immobilienbranche – Die neue Immobilien-Redaktion.com</h1>

                <p>Die Immobilien-Redaktion.com präsentiert sich in einem völlig neuen Gewand und bietet Ihnen ab sofort eine umfassende digitale Plattform, die weit über die reine Informationsvermittlung hinausgeht. Mit dem Relaunch erweitern wir unser Angebot um zahlreiche innovative SaaS-Funktionen, die Ihren Arbeitsalltag in der Immobilienbranche effizienter und vernetzter gestalten.</p>

                <h2>Umfassende Funktionalitäten für Immobilienprofis</h2>

                <p>Im Zentrum unserer neuen Plattform steht ein benutzerfreundliches System zur Veröffentlichung von Fachartikeln, das auch technisch weniger versierten Nutzern einen unkomplizierten Einstieg ermöglicht. Die intuitive Benutzeroberfläche führt Sie Schritt für Schritt durch den Publikationsprozess, sodass Sie Ihre Expertise ohne technische Hürden mit der Branche teilen können.</p>

                <p>Das neu konzipierte Unternehmensverzeichnis bietet Ihnen die Möglichkeit, Ihr Unternehmen prominent zu platzieren und wichtige Kontakte innerhalb der Immobilienbranche zu knüpfen. Parallel dazu schafft das integrierte Event-Management-System Transparenz über bevorstehende Branchenveranstaltungen und vereinfacht deren Organisation sowie die Anmeldung für Teilnehmer erheblich.</p>

                <h2>Vernetzung und Karrieremöglichkeiten</h2>

                <blockquote>
                    „Die Digitalisierung verändert die Art und Weise, wie wir in der Immobilienbranche kommunizieren und zusammenarbeiten grundlegend", erklärt die Redaktionsleitung die Neuausrichtung der Plattform. „Mit unserem Relaunch bieten wir nicht nur Informationen, sondern schaffen ein digitales Ökosystem für alle Marktteilnehmer."
                </blockquote>

                <p>Besonders hervorzuheben ist das optimierte Stellenportal, das Arbeitgeber und qualifizierte Fachkräfte effizient zusammenbringt und den Recruiting-Prozess in der Immobilienbranche deutlich beschleunigt. Die verbesserten Nutzerfunktionen ermöglichen zudem eine individuelle Anpassung der Plattform an Ihre persönlichen Informationsbedürfnisse.</p>

                <h2>Unterstützung bei allen Fragen</h2>

                <p>Der Relaunch umfasst selbstverständlich auch eine umfangreiche FAQ-Sektion, die häufig auftretende Fragen verständlich beantwortet und Ihnen den Einstieg in die Nutzung der neuen Funktionen erleichtert. Sollten dennoch Fragen offen bleiben, steht Ihnen unser verbessertes Kontaktformular zur Verfügung, über das Sie direkt mit unserem Support-Team in Verbindung treten können.</p>

                <p>Für technische Probleme oder Verbesserungsvorschläge haben wir zudem ein dediziertes Bug-Reporting-System implementiert, das eine schnelle Bearbeitung Ihrer Anliegen gewährleistet und zur kontinuierlichen Optimierung der Plattform beiträgt.</p>

                <p class="footer">Entdecken Sie jetzt die neue Immobilien-Redaktion.com – Ihr digitaler Partner für professionellen Informationsaustausch und Vernetzung in der Immobilienbranche.</p>
            </article>
        </div>
    </div>
</flux:main>
@fluxScripts
</body>
</html>
