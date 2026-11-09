<?php

use App\Support\SiteData;

function site(): SiteData { return app(SiteData::class); }
function setting(string $key, $default = null) { return site()->setting($key, $default); }
function sec(string $key, string $field): string { return (string) site()->section($key, $field); }
function img(string $key): string { return asset(site()->imagePath($key)); }
function img_alt(string $key): string { return site()->imageAlt($key); }
function waLink(): string { return 'https://wa.me/' . preg_replace('/\D/', '', setting('whatsapp')); }

/** Heading text: new line = line break, *word* = italic accent. */
function rich(?string $text): string
{
    $t = e($text ?? '');
    $t = preg_replace('/\*(.+?)\*/s', '<em>$1</em>', $t);
    return nl2br($t, false);
}

/** Paragraph text: blank line = new paragraph. */
function paras(?string $text): string
{
    $out = '';
    foreach (preg_split('/\R{2,}/', trim($text ?? '')) as $p) {
        if (trim($p) !== '') $out .= '<p>' . nl2br(e(trim($p)), false) . '</p>';
    }
    return $out;
}

/** CSS variables for the button colour chosen in admin. Empty when it's the default. */
function buttonCss(): string
{
    $hex = strtolower(ltrim(setting('button_color'), '#'));
    if (!preg_match('/^[0-9a-f]{6}$/', $hex) || $hex === 'dcaa2c') return '';
    [$r, $g, $b] = array_map('hexdec', str_split($hex, 2));
    $mix = fn ($to, $p) => '#' . implode('', array_map(
        fn ($c) => str_pad(dechex((int) round($c + ($to - $c) * $p)), 2, '0', STR_PAD_LEFT), [$r, $g, $b]));
    $text = (0.299 * $r + 0.587 * $g + 0.114 * $b) > 150 ? '#11110f' : '#ffffff';
    return ':root{--btn-a:' . $mix(255, .2) . ';--btn-b:' . $mix(0, .12) . ';--btn-hover:' . $mix(0, .06) . ';--btn-text:' . $text . '}';
}
