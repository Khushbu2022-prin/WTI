<?php
$menuactive = basename($_SERVER['PHP_SELF']);

switch ($menuactive) {
    case 'index.php':
        $title = "Home || WTI Primes";
        break;

    case 'why-us.php':
        $title = "why us";
        break;

    case 'legal-documentation.php':
        $title = "legal documentation";
        break;

    case 'privacy-policy.php':
        $title = "privacy-policy";
        break;

    case 'risk-disclaimer.php':
        $title = "risk-disclaimer";
        break;

    case 'Terms-disclaimer.php':
        $title = "Terms & disclaimer";
        break;

    case 'micro-account.php':
        $title = "micro account";
        break;

    case 'mini-account.php':
        $title = "mini account";
        break;

    case 'prime-account.php':
        $title = "prime account";
        break;

    case 'luxury-account.php':
        $title = "luxury account";
        break;

    case 'islamic-account.php':
        $title = "islamic account";
        break;

    case 'deposit-method.php':
        $title = "deposit method";
        break;

    case 'withdrawal-method.php':
        $title = "withdrawal method";
        break;

    case 'metatrader-5-windows.php':
        $title = "metatrader 5(windows)";
        break;

    case 'metatrader-5-mobile.php':
        $title = "metatrader 5(mobile)";
        break;

    case 'economic-calendar.php':
        $title = "economic calendar";
        break;

    case 'charts.php':
        $title = "charts";
        break;

    case 'markets.php':
        $title = "markets";
        break;

    case 'ib-program.php':
        $title = "ib program";
        break;

        case 'channel-partners.php':
            $title = "channel partners";
            break;

            case 'become-an-ib.php':
                $title = "become an ib";
                break;

                case 'education.php':
                    $title = "education";
                    break;

                    case 'glossary.php':
                        $title = "glossary";
                        break;

                        case 'contact-us.php':
                            $title = "contact us";
                            break;



    default:
        $title = "Title Here";
        $description = "Description Here";
        $keywords = "Keyword Here";
        $name = "";
        $alternateName = "";
        $url = "";
        break;
}
