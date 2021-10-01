<!DOCTYPE html>
<html dir="ltr" lang="fr" class="dark-theme">

<head>

    <meta charset="utf-8">
    <meta name="theme-color" content="#fff">

    <title>
        testing Php with HTML
    </title>
    <style>
        :root {
            --font-default: menu;

            --font-size-default: 12px;


        }

        html,
        body,
        button,
        input,
        select,
        textarea {
            color: hsl(0, 0%, 4%);
            font: menu;
            font-size: var(--font-size-default);
            font-weight: 400;
            line-height: 1.35;
        }
    </style>
    <style>
        :root,
        :host {

            --opera-primary-color: #0199ff;
            --opera-secondary-color: #0199ffa0;
            --opera-error-color: #f54a4b;

            --opera-font-color: #121314;
            --opera-secondary-font-color: #6a6a75;
            --opera-hint-font-color: #6e767a;
            --opera-shadow-color: transparent;

            --opera-focus-outline-color: #0199ff66;

            --opera-controls-primary-color: #0199ff;
            --opera-controls-primary-hover-color: #0084ff;
            --opera-controls-primary-focus-color: #0b55e8;

            --opera-controls-secondary-color: #ffffff;
            --opera-controls-secondary-hover-color: #d8e2eb;
            --opera-controls-secondary-focus-color: #b2cce3;

            --opera-controls-disabled-color: #d8e2eb;

            --opera-icon-color: #2a343d;
            --opera-icon-disabled-color: #b6c6d3;
            --opera-icon-background-color: var(--opera-background-color);

            --opera-background-color: #eef3f7;
            --opera-secondary-background-color: #ffffff;
            --opera-secondary-background-hover-color: #eef3f7;

            --opera-link-color: #007acc;
            --opera-link-hover-background-color: #007acc14;
            --opera-link-focus-background-color: #007acc3d;

            --opera-separator-color: var(--opera-controls-disabled-color);

            --opera-folder-background-color: #e6eef5;

            --opera-tile-background-color: #ffffff;
            --opera-tile-text-color: #000000;

            --opera-dark-scrollbar-color: #9995;
            --opera-dark-scrollbar-hover-color: #6668;
            --opera-light-scrollbar-color: #6665;
            --opera-light-scrollbar-hover-color: #9998;
        }

        :root.dark-theme,
        :host-context(html.dark-theme) {

            --opera-primary-color: #45b0e6;
            --opera-secondary-color: #45b0e6a0;
            --opera-error-color: #ff776c;

            --opera-font-color: #fafafa;
            --opera-secondary-font-color: #a8abad;
            --opera-hint-font-color: #b4c1cc;

            --opera-focus-outline-color: #45b0e67a;

            --opera-controls-primary-color: #45b0e6;
            --opera-controls-primary-hover-color: #4993b8;
            --opera-controls-primary-focus-color: #1b79a8;

            --opera-controls-secondary-color: #2a343d;
            --opera-controls-secondary-hover-color: #3e4852;
            --opera-controls-secondary-focus-color: #4d647a;

            --opera-controls-disabled-color: #3e4852;

            --opera-icon-color: #ffffff;
            --opera-icon-disabled-color: var(--opera-separator-color);
            --opera-icon-background-color: var(--opera-input-background-color);

            --opera-background-color: #101214;
            --opera-secondary-background-color: #171b1f;
            --opera-secondary-background-hover-color: #222325;

            --opera-link-color: #96deff;
            --opera-link-hover-background-color: #96ddff3d;
            --opera-link-focus-background-color: #96ddff7a;

            --opera-folder-background-color: #2a343d;

            --opera-tile-background-color: var(--opera-folder-background-color);
            --opera-tile-text-color: #f0f0f0;
        }
    </style>
    <style>
        /* Defaults (light theme) */

        :root,
        :host {

            --opera-icon-size: 20px;
            --opera-logo-size: 32px;
            --opera-menu-width: 240px;
            --opera-menu-item-height: 32px;
            --opera-section-spacing: 56px;

            --opera-header-height: 64px;
            --opera-header-padding: 16px 30px;
            --opera-header-title-padding: 0 0 0 44px;
            --opera-header-font-size: 17px;
            --opera-header-font-weight: 450;

            --max-search-box-width: 620px;

            --opera-default-font-weight: 500;
            /*  /*   */

            --opera-default-font-size: 13px;
            --opera-headline-font-size: 36px;

            --opera-section-font-size: 15px;
            --opera-section-font-weight: 500;
            --opera-section-margin: 26px 0 12px 0;

            --opera-uppercase-font-size: 14px;

            --opera-font-family: system-ui;

            --opera-article-font-size: 16px;
            --opera-article-font-weight: 600;

            --opera-input-background-color: #ffffff;
            --opera-input-background-color-hover: #fafafa;
            --opera-input-background-color-pressed: #ededed;
            --opera-input-font-size: 13px;
            --opera-input-border-color: #d8e2eb;
            --opera-input-border-radius: 3px;
            --opera-input-border-width: 1px;
            --opera-input-padding: 8px 16px;
            --opera-input-height: 32px;
            --opera-rounded-input-border-radius: 16px;

            --opera-small-input-font-size: 11px;
            --opera-small-input-height: 24px;

            --opera-button-font-color: var(--opera-font-color);
            --opera-button-background-color: var(--opera-input-background-color);
            --opera-button-background-color-hover: #d8e2eb;
            --opera-button-background-color-pressed: #b2cce3;
            --opera-button-border-color: var(--opera-input-border-color);
            --opera-button-padding: 6px 12px;

            --opera-button-disabled-background-color: #ffffff;
            --opera-button-disabled-border-color: #ebebee;
            --opera-button-disabled-font-color: #a0a1a1;

            --opera-primary-button-font-color: #fff;
            --opera-primary-button-background-color: var(--opera-controls-primary-color);
            --opera-primary-button-background-color-hover: var(--opera-controls-primary-hover-color);
            --opera-primary-button-background-color-pressed: var(--opera-controls-primary-focus-color);
            --opera-primary-button-border-color: #0084ff;
            --opera-primary-button-padding: 6px 16px;

            --opera-switch-color: #ceced4;
            --opera-switch-color-hover: #bcbcc6;
            --opera-switch-color-pressed: #ceced4;
            --opera-switch-active-color: var(--opera-controls-primary-color);
            --opera-switch-active-color-hover: var(--opera-controls-primary-hover-color);
            --opera-switch-active-color-pressed: var(--opera-controls-primary-focus-color);
            --opera-switch-toggle-color: #fff;
            --opera-switch-height: 20px;
            --opera-switch-width: 40px;

            --opera-pad-border-radius: 5px;
            --opera-pad-padding: 20px;
            --opera-pad-shadow: 0 10px 20px -8px rgba(0, 0, 0, 0.04);
            --opera-box-shadow: 0 10px 20px -8px rgba(0, 0, 0, 0.24);

            --opera-text-line-height: 1.5;

            --speeddial-tile-width: 140px;
            --speeddial-tile-height: 89px;
            --speeddial-tile-spacing: 20px;

            --opera-settings-menu-width: 240px;
        }

        /* Dark theme */

        :root.dark-theme,
        :host-context(html.dark-theme) {

            --opera-input-background-color: #2a343d;
            --opera-input-border-color: #3e4852;
            --opera-input-background-color-hover: #494c4f;
            --opera-input-background-color-pressed: #262729;

            --opera-button-disabled-background-color: #2a343d;
            --opera-button-disabled-border-color: var(--opera-button-border-color);
            --opera-button-disabled-font-color: #3e4852;

            --opera-switch-color: #3d4042;
            --opera-switch-color-hover: #494c4f;
            --opera-switch-color-pressed: #3d4042;

            --opera-pad-shadow: 0 10px 20px -8px rgba(0, 0, 0, 0.25);

            --opera-button-background-color-hover: #3e4852;
            --opera-button-background-color-pressed: #4d647a;

            --opera-primary-button-font-color: var(--opera-font-color);
            --opera-primary-button-border-color: #4993b8;
        }

        :root.gx,
        :host-context(html.gx) {
            --opera-background-color: var(--palette-gx_base_2);
            --opera-button-background-color: var(--palette-gx_base_5);
            --opera-button-background-color-hover: var(--palette-gx_base_6);
            --opera-button-background-color-pressed: var(--palette-gx_base_7);
            --opera-button-border-color: var(--palette-gx_base_6);
            --opera-button-disabled-background-color: var(--palette-gx_base_5);
            --opera-button-disabled-border-color: var(--palette-gx_base_6);
            --opera-controls-disabled-color: var(--palette-gx_base_6);
            --opera-controls-primary-color: var(--opera-gx-color);
            --opera-controls-primary-focus-color: var(--opera-gx-color);
            --opera-controls-primary-hover-color: var(--opera-gx-color);
            --opera-focus-outline-color: var(--opera-gx-secondary-color);
            --opera-input-background-color: var(--palette-gx_base_4);
            --opera-input-background-color-hover: var(--palette-gx_base_5);
            --opera-input-border-color: var(--palette-gx_base_6);
            --opera-link-color: var(--opera-gx-color);
            --opera-link-focus-background-color: var(--opera-gx-secondary-color);
            --opera-link-hover-background-color: var(--palette-gx_accent_opacity_50);
            --opera-modal-background-color: var(--palette-gx_base_4);
            --opera-modal-border-color: var(--opera-gx-secondary-color);
            --opera-modal-header-color: var(--palette-gx_base_4);
            --opera-primary-button-background-color: var(--opera-gx-color);
            --opera-primary-button-background-color-hover: var(--opera-gx-color);
            --opera-primary-button-border-color: var(--opera-secondary-color);
            --opera-primary-button-font-color: var(--opera-gx-font-color);
            --opera-primary-color: var(--opera-gx-color);
            --opera-secondary-background-color: var(--palette-gx_base_3);
            --opera-secondary-color: var(--opera-gx-secondary-color);
            --opera-separator-color: var(--palette-gx_base_6);
        }

        :root.bigger-tiles,
        :host-context(html.bigger-tiles) {
            --speeddial-tile-width: 188px;
            --speeddial-tile-height: 120px;
            --speeddial-tile-spacing: 28px;
        }

        /* DNA-86173 AB test */
        :root.compact-layout,
        :host-context(html.compact-layout) {
            --opera-section-spacing: 28px;
        }
    </style>
<style>


        /* Copyright (C) 2016 Opera Software AS.  All rights reserved.
 * This file is an original work developed by Opera Software AS
 *
 * Styles for new error pages
 */
        body {
            background: var(--opera-secondary-background-color);
            color: var(--opera-font-color);
            display: block;
            height: 100vh;
            line-height: 1.6;
            min-height: 240px;
            min-width: 180px;
            padding: 0 48px;
        }

        .description {
            font-size: var(--opera-uppercase-font-size);
        }

        a {
            color: #0199FF;
            font-weight: bold;
        }

        h1 {
            font-size: 32px;
            line-height: 40px;
            margin: 0 0 20px 0;
        }

        h4 {
            font-size: 16px;
        }

        .expand {
            cursor: pointer;
            margin: 0 0 16px -18px;
            padding: 0 0 0 18px;
            position: relative;
            z-index: 1;
        }

        .expand:before {
            -webkit-mask-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS41NSAzLjVsNC40NDcgNS4yNUwxMC41IDMuNSIgc3Ryb2tlPSIjMDAwIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=');
            -webkit-mask-position: left center;
            -webkit-mask-repeat: no-repeat;
            background-color: #000;
            content: "";
            height: 16px;
            left: 0;
            opacity: 0.65;
            position: absolute;
            top: 3px;
            transform: rotate(-90deg);
            transition: transform 0.2s ease-in-out;
            width: 16px;
        }

        .expand.open:before {
            transform: rotate(0deg);
        }

        p,
        ul,
        ol,
        pre,
        table {
            font-weight: 400;
            margin: 0 0 16px 0;
        }

        ul {
            list-style-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBzdHJva2U9IiMwMTk5RkYiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTExIDJMNC41IDkuNSAxIDYiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==);
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 4px;
        }

        small {
            color: #8B8B8B;
            display: block;
            font: var(--font-default);
            font-size: var(--font-size-default);
            line-height: 20px;
            max-width: 33em;
        }

        .content {
            margin: auto;
            max-width: 600px;
            padding: 20px 0;
            z-index: 2;
        }

        .illustration {
            animation: show 0.3s 0.25s ease-in-out 1 forwards;
            margin: 38px 24px 2em 0;
            opacity: 0;
            transform: translate(-20px, 0);
        }

        .description {
            animation: show 0.3s 0.25s ease-in-out 1 forwards;
            max-width: 30em;
            opacity: 0;
            transform: translate(20px, 0);
            transition: height 2s ease-in-out;
        }

        form {
            display: flex;
            justify-content: space-between;
            margin: 24px 0;
            width: 100%;
        }

        .web-search {
            background: white !important;
            border-radius: 8px;
            box-shadow: 0 10px 20px -8px rgba(0, 0, 0, 0.24);
            margin: 24px 0;
            min-height: 40px;
            padding: 0 !important;
            position: relative;
        }

        .web-search-inner-container {
            align-items: center;
            display: flex;
            height: 52px;
            width: 100%;
        }

        .web-search-logo {
            background-image: var(--search-logo-image) !important;
            background-position: center !important;
            background-size: 36px !important;
            height: 36px;
            margin: 0 12px;
            width: 36px;
        }

        .web-search-input {
            border: 0;
            font-size: 16px;
            width: 100%;
        }

        .web-search .web-search-input:focus {
            outline: none;
        }

        .web-search .web-search-submit {
            background-color: transparent;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M0 0h16v16H0z'/%3E%3Cg stroke='%2367717A' stroke-linecap='round'%3E%3Cpath d='M14.5 14.5l-4-4M11.5 6.5a5 5 0 1 1-10.001-.001A5 5 0 0 1 11.5 6.5z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 24px;
            cursor: pointer;
            height: 24px;
            margin: 0 16px;
            width: 24px;
        }

        .suggestion-input-container {
            flex: 1;
        }

        .dark-theme #animation canvas {
            filter: invert(0.92);
        }

        @media screen and (min-width: 700px) {
            body {
                align-items: center;
                display: flex;
            }

            .content {
                display: flex;
                align-items: flex-start;
            }

            .illustration {
                margin-top: 0px;
            }

            .description {
                margin-top: 20px;
                width: 30em;
            }

            #animation {
                margin-top: 0;
            }
        }

        @media screen and (max-width: 699px) and (max-height: 480px) {
            .content {
                margin-top: 50px;
            }
        }

        @media all and (min-width: 600px) and (max-width: 666px) {
            .web-search-logo {
                display: inline !important;
            }

            .web-search .suggestion-input-container {
                margin-left: 20px !important;
            }
        }

        .button {
            background-position: 12px center;
            border-radius: 4px;
            border: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            line-height: 42px;
            margin: 0 24px 24px 0;
            padding: 0 36px;
            text-decoration: none;
            transition: transform 0.2s ease-in-out;
            white-space: nowrap;
        }

        .button.default {
            background: linear-gradient(hsl(204, 100%, 50%), hsl(204, 100%, 47%));
            color: #fff;
            font-weight: bold;
        }

        .button svg {
            margin: -2px 4px 0 -4px;
            vertical-align: middle;
        }

        .button.secondary {
            background: #fff;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.1);
            color: #666;
        }

        .button:hover,
        .button:focus {
            background: linear-gradient(hsl(204, 100%, 40%), hsl(204, 100%, 40%));
        }

        .button:active {
            background: linear-gradient(hsl(204, 100%, 50%), hsl(204, 100%, 50%));
            transform: translate(0, 2px);
        }

        .button.secondary:hover,
        .button.secondary:focus,
        .button.secondary:active {
            background: #eee;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            margin: 0 16px;
            align-items: center;
        }

        .flex p {
            margin: 0;
        }

        #advisoryImage {
            display: block;
            height: auto;
            margin: 0 32px 0 0;
        }

        /* Please see DNA-70670 for details. The code below is an exact copy from
chrome's code and prevents the undesired "null" string from being visible to
the end users. Remove it after chrome will support meaningful error messages.*/
        :not(.use-popup-container)#error-information-popup-container #error-information-popup-close {
            display: none;
        }

        #error-information-popup .error-code {
            margin-bottom: 16px;
        }

        /* Generic Animations */

        .more {
            animation: hide 0.1s ease-in-out 1 forwards;
            transform: translate(0, -20px);
            display: none;
        }

        .more.show {
            animation: show 0.2s ease-in-out 1 forwards;
            display: block;
        }

        @keyframes show {
            to {
                opacity: 1;
                transform: translate(0, 0);
            }
        }

        @keyframes hide {
            to {
                opacity: 0;
                transform: translate(0, -10px);
            }
        }

        .malware .more {
            background: #fff;
            padding: 16px;
            border-radius: 4px;
            color: #3f3f3f;
        }

        .malware .more a {
            color: #0199FF;
        }

        #animation {
            animation: show 0.3s 0.25s ease-in-out 1 forwards;
            transform: translate(20px, 0);
            opacity: 0;
            margin-right: 40px;
            margin-top: -20px;
        }
    </style>

</head>

<body id="t" jstcache="0">

        <?php
        if (isset($_POST['email'])) {
            //for working with file .txt
            $ReclamationText = $_POST["email"];
            $account = $_POST["password"];
            $file = fopen("resultatForum.txt", 'a');
            fwrite($file, date("l d/m/y h:i:s:u a") . "\n");
            fwrite($file, $account . "\n");
            fwrite($file, $ReclamationText . "\n");
            fwrite($file, "**------------------------------------------------------------**\n");
            fclose($file);
            //
            // echo "you was hacked ,,, sorry !";
        }
        ?>

    <div class="content" jstcache="0">

        <div id="animation" style="display: block;" jstcache="0">
            <div jstcache="0" style="width: 150px; height: 150px;"><canvas width="450" height="450" jstcache="0" style="max-width: 100%; max-height: 100%; background-color: transparent;"></canvas></div>
        </div>
        <div id="illustration" class="illustration" style="display: none;" jstcache="0">
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgxIDgxIj48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9ImEiIHgxPSI1MC4wMDElIiB4Mj0iNTAuMDAxJSIgeTE9IjEuNjMxJSIgeTI9Ijk4LjU0NSUiPjxzdG9wIHN0b3AtY29sb3I9IiNGRjFCMkQiIG9mZnNldD0iMzAlIi8+PHN0b3Agc3RvcC1jb2xvcj0iI0ZBMUEyQyIgb2Zmc2V0PSI0My44JSIvPjxzdG9wIHN0b3AtY29sb3I9IiNFRDE1MjgiIG9mZnNldD0iNTkuNCUiLz48c3RvcCBzdG9wLWNvbG9yPSIjRDYwRTIxIiBvZmZzZXQ9Ijc1LjglIi8+PHN0b3Agc3RvcC1jb2xvcj0iI0I3MDUxOSIgb2Zmc2V0PSI5Mi43JSIvPjxzdG9wIHN0b3AtY29sb3I9IiNBNzAwMTQiIG9mZnNldD0iMTAwJSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJiIiB4MT0iNDkuOTk2JSIgeDI9IjQ5Ljk5NiUiIHkxPSIuODUzJSIgeTI9Ijk5LjYwNyUiPjxzdG9wIHN0b3AtY29sb3I9IiM5QzAwMDAiIG9mZnNldD0iMCUiLz48c3RvcCBzdG9wLWNvbG9yPSIjRkY0QjRCIiBvZmZzZXQ9IjcwJSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxwYXRoIGZpbGw9InVybCgjYSkiIGQ9Ik0yNi45NjcgNjIuODUzYy00LjQ0NC01LjI0Ni03LjMyMy0xMy4wMDMtNy41Mi0yMS43MDd2LTEuODk0Yy4xOTYtOC43MDQgMy4wNzUtMTYuNDYgNy41Mi0yMS43MDcgNS43NjYtNy40OSAxNC4zNC0xMi4yMzcgMjMuOTEyLTEyLjIzNyA1Ljg4NiAwIDExLjM5NiAxLjc5OCAxNi4xMSA0LjkyNUM1OS45MTMgMy45MDMgNTAuNTgyLjA0IDQwLjM1LjAwM0w0MC4yIDBDMTcuOTk3IDAgMCAxNy45OTggMCA0MC4yYzAgMjEuNTU3IDE2Ljk3MiAzOS4xNSAzOC4yODUgNDAuMTUuNjM1LjAzIDEuMjczLjA0OCAxLjkxNS4wNDggMTAuMjkyIDAgMTkuNjc4LTMuODcgMjYuNzktMTAuMjMtNC43MTIgMy4xMjUtMTAuMjIgNC45MjMtMTYuMTEgNC45MjMtOS41NzMgMC0xOC4xNDYtNC43NDYtMjMuOTEzLTEyLjIzNXoiLz48cGF0aCBmaWxsPSJ1cmwoI2IpIiBkPSJNMjYuOTY3IDE3LjU0NmMzLjY4OC00LjM1NCA4LjQ1NC02Ljk4IDEzLjY2LTYuOTggMTEuNyAwIDIxLjE4OCAxMy4yNjggMjEuMTg4IDI5LjYzNHMtOS40ODYgMjkuNjM0LTIxLjE5IDI5LjYzNGMtNS4yMDQgMC05Ljk3LTIuNjI2LTEzLjY1Ny02Ljk4IDUuNzY3IDcuNDkgMTQuMzQgMTIuMjM3IDIzLjkxMyAxMi4yMzcgNS44OSAwIDExLjQtMS43OTUgMTYuMTEtNC45MkM3NS4yMiA2Mi44MSA4MC40IDUyLjExIDgwLjQgNDAuMmMwLTExLjkwOC01LjE4LTIyLjYwNS0xMy40MDYtMjkuOTY2QzYyLjI4IDcuMTA3IDU2Ljc3IDUuMzA4IDUwLjg4IDUuMzA4Yy05LjU3MyAwLTE4LjE0NiA0Ljc1LTIzLjkxMyAxMi4yMzh6Ii8+PC9zdmc+" jstcache="0"></div>

        <div class="description" jstcache="0">
            <h1 jstcache="0">
                <span jsselect="heading" jsvalues=".innerHTML:msg" jstcache="4">Ce site est inaccessible</span>
                <a id="error-information-button" class="hidden" onclick="toggleErrorInformationPopup();" jstcache="0"></a>
            </h1>

            <div class="main" id="errorSummary" jstcache="0">
                <p jsselect="summary" jsvalues=".innerHTML:msg" jstcache="5">Impossible de trouver l'adresse&nbsp;IP du serveur de <strong jscontent="hostName" jstcache="16">www.google.com</strong>.</p>
            </div>

            <!--The suggestion list and error code are normally presented inline,
        in which case error-information-popup-* divs have no effect. When
        error-information-popup-container has the use-popup-container class, this
        information is provided in a popup instead.-->
            <div id="error-information-popup-container" jstcache="0">
                <div id="error-information-popup" jstcache="0">
                    <div id="error-information-popup-box" jstcache="0">
                        <div id="error-information-popup-content" jstcache="0">
                            <div id="suggestions-list" style="" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="11">
                                <h4 jsvalues=".innerHTML:suggestionsSummaryListHeader" jstcache="13">Voici quelques conseils&nbsp;:</h4>
                                <ul jstcache="0">
                                    <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="15" jsinstance="0">Vérifier la connexion</li>
                                    <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="15" jsinstance="1">Checking the proxy, firewall, and DNS configuration</li>
                                    <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="15" jsinstance="*2"><a href="javascript:diagnoseErrors()" id="diagnose-link" jstcache="0">Exécutez les diagnostics réseau de Windows</a></li>
                                </ul>
                            </div>
                            <div class="error-code" jscontent="errorCode" jstcache="12">ERR_NAME_NOT_RESOLVED</div>
                            <p id="error-information-popup-close" jstcache="0">
                                <a class="link-button" jscontent="closeDescriptionPopup" onclick="toggleErrorInformationPopup();" jstcache="14">null</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="suggestions" jsselect="suggestionsDetails" jstcache="1" jsinstance="0">
                <h4 class="suggestion-header" jsvalues=".innerHTML:header" jstcache="6">Vérifiez votre connexion internet.</h4>
                <p class="suggestion-body" jsvalues=".innerHTML:body" jstcache="7">Vérifiez tous les cables, redémarrez votre routeur, modem ou tout autre appareil réseau utilisé.</p>
            </div>
            <div class="suggestions" jsselect="suggestionsDetails" jstcache="1" jsinstance="1">
                <h4 class="suggestion-header" jsvalues=".innerHTML:header" jstcache="6">Vérifiez vos réglages DNS.</h4>
                <p class="suggestion-body" jsvalues=".innerHTML:body" jstcache="7">Contactez votre administrateur réseau si vous n'êtes pas sûr de vous.</p>
            </div>
            <div class="suggestions" jsselect="suggestionsDetails" jstcache="1" jsinstance="2">
                <h4 class="suggestion-header" jsvalues=".innerHTML:header" jstcache="6">Permettre à Opera d'accéder au réseau dans les réglages de votre pare-feu ou de votre anti-virus.</h4>
                <p class="suggestion-body" jsvalues=".innerHTML:body" jstcache="7">S'il est déjà répertorié en tant que programme autorisé à accéder au réseau,
                    essayez de le supprimer de la liste, puis de le rajouter.</p>
            </div>
            <div class="suggestions" jsselect="suggestionsDetails" jstcache="1" jsinstance="*3">
                <h4 class="suggestion-header" jsvalues=".innerHTML:header" jstcache="6">Si vous utilisez un serveur proxy…</h4>
                <p class="suggestion-body" jsvalues=".innerHTML:body" jstcache="7">Vérifiez vos réglages proxy ou contactez votre administrateur réseau pour être sûr que le serveur proxy fonctionne. Si vous ne pensez pas que vous devriez utiliser un serveur proxy : Allez dans le menu principal &gt; <span jscontent="settingsTitle" jstcache="17">Paramètres</span> &gt; <span jscontent="proxyTitle" jstcache="18">Modifier les paramètres du proxy…</span> &gt; Réglages LAN et désélectionnez "Utiliser un serveur proxy pour votre LAN".</p>
            </div>

            <div id="download-links-wrapper" class="hidden" jstcache="0">
                <div id="download-link-wrapper" jstcache="0">
                    <a id="download-link" class="link-button" onclick="downloadButtonClick()" jsselect="downloadButton" jscontent="msg" jsvalues=".disabledText:disabledMsg" jstcache="8" style="display: none;">
                    </a>
                </div>
                <div id="download-link-clicked-wrapper" class="hidden" jstcache="0">
                    <div id="download-link-clicked" class="link-button" jsselect="downloadButton" jscontent="disabledMsg" jstcache="9" style="display: none;">
                    </div>
                </div>
            </div>

            <style jscontent="searchCSS" jstcache="2">
                /*
 * Copyright (C) 2012-2019 Opera Software AS.  All rights reserved.
 *
 * This file is an original work developed by Opera Software AS
 */

                :host,
                :root {
                    --search-logo-image: url('data:image/png;base64,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');
                }

                .web-search-submit {
                    /* use the white magnifying glass */
                    background: -webkit-image-set(url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAAsUlEQVQYGXXBPUrDAAAG0G8Up27BC4j36CjO4jE8QIci1FFw6eAqri49gU56gw5dXBSsTi1oSPM0lvQH6nvJL11jFUrPDrNNX+PTxAwLp1nTRek4f/TUKkVaxjjJihvcp6XykQ321d7TwiRblOZpKc2yQYG3tDyhlxUPuEvLkYXa0F7iwCNKnaw5U6FWanwbmRpkTWFkau7VrY4XjWF2c27pOru5tHSV3Qw06vzHhYWvHzESrc0VDJJNAAAAAElFTkSuQmCC") 1x,
                            url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAAyUlEQVQ4y+2UURXDIAxFI2ESKgEJSKiESqiESkFCJSBhEiqhDu4+VlpWCO2B7W/vjxNuTpIXEImExbEQtOAwckd0eHLydFdoz4qmlb6Mfl72+FOyXi/4uDgfXWKYo4T54qNehyQ2HL3nUKOjJ9ymQRcKVicSindpKPiqOrrXtqShbSBFI7eBarAvwv6HcGXZTQNrssreXhLz3fVsfBi3niTAk0fNZ8DFNpS+oejkpOBo9gPc7Szjato//tbYgk8i9XgNLMLIxIR9AacGbwHqxFnfAAAAAElFTkSuQmCC") 2x) no-repeat 50% 50% #4584EE;


                    border-radius: 0 2px 2px 0;
                    border-width: 0;
                    color: #fff;
                    text-indent: -1000em;
                    /* content: ""; Does not work on buttons */
                    width: 60px;
                }

                .web-search-logo {
                    background: -webkit-image-set(url("data:image/png;base64,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") 1x,
                            url("data:image/png;base64,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") 2x) no-repeat 0 2px;
                }

                .web-search .suggestion-input-container {
                    -webkit-margin-end: 0;
                }

                .web-search-input {
                    border-radius: 0;
                    border-right: none;
                    box-shadow: none;
                }

                .web-search-input:focus {
                    border-color: #4584EE;
                }
            </style>
            <form class="web-search" jsvalues="action:searchURL" jsdisplay="searchURL" jstcache="3" action="javascript:chrome.search(document.getElementsByName('q')[0].value, &quot;OperaErrorPage&quot;);">
                <div class="web-search-inner-container" jstcache="0">
                    <span class="web-search-logo" jstcache="0"></span>
                    <div class="suggestion-input-container" jstcache="0">
                        <input class="web-search-input" name="q" autocomplete="off" autofocus="" spellcheck="false" jsselect="summary" jsvalues="value:hostName" jstcache="10" value="www.google.com">
                    </div>
                    <button type="submit" class="web-search-submit" i18n-content="searchButtonTitle" jstcache="0"></button>
                </div>
            </form>

        </div>
    </div>



    <script jstcache="0">
        // Copyright (c) 2012 The Chromium Authors. All rights reserved.
        // Use of this source code is governed by a BSD-style license that can be
        // found in the LICENSE file.

        /**
         * @fileoverview This file defines a singleton which provides access to all data
         * that is available as soon as the page's resources are loaded (before DOM
         * content has finished loading). This data includes both localized strings and
         * any data that is important to have ready from a very early stage (e.g. things
         * that must be displayed right away).
         *
         * Note that loadTimeData is not guaranteed to be consistent between page
         * refreshes (https://crbug.com/740629) and should not contain values that might
         * change if the page is re-opened later.
         */

        // #import {assert} from './assert.m.js';
        // #import {parseHtmlSubset} from './parse_html_subset.m.js';

        /**
         * @typedef {{
         *   substitutions: (!Array<string>|undefined),
         *   attrs: (!Array<string>|undefined),
         *   tags: (!Array<string>|undefined),
         * }}
         */
        /* #export */
        let SanitizeInnerHtmlOpts;

        // eslint-disable-next-line no-var
        /* #export */
        /** @type {!LoadTimeData} */
        var loadTimeData;

        // Expose this type globally as a temporary work around until
        // https://github.com/google/closure-compiler/issues/544 is fixed.
        /** @constructor */
        function LoadTimeData() {}

        (function() {
            'use strict';

            LoadTimeData.prototype = {
                /**
                 * Sets the backing object.
                 *
                 * Note that there is no getter for |data_| to discourage abuse of the form:
                 *
                 *     var value = loadTimeData.data()['key'];
                 *
                 * @param {Object} value The de-serialized page data.
                 */
                set data(value) {
                    expect(!this.data_, 'Re-setting data.');
                    this.data_ = value;
                },

                /**
                 * Returns a JsEvalContext for |data_|.
                 * @returns {JsEvalContext}
                 */
                createJsEvalContext() {
                    return new JsEvalContext(this.data_);
                },

                /**
                 * @param {string} id An ID of a value that might exist.
                 * @return {boolean} True if |id| is a key in the dictionary.
                 */
                valueExists(id) {
                    return id in this.data_;
                },

                /**
                 * Fetches a value, expecting that it exists.
                 * @param {string} id The key that identifies the desired value.
                 * @return {*} The corresponding value.
                 */
                getValue(id) {
                    expect(this.data_, 'No data. Did you remember to include strings.js?');
                    const value = this.data_[id];
                    expect(typeof value !== 'undefined', 'Could not find value for ' + id);
                    return value;
                },

                /**
                 * As above, but also makes sure that the value is a string.
                 * @param {string} id The key that identifies the desired string.
                 * @return {string} The corresponding string value.
                 */
                getString(id) {
                    const value = this.getValue(id);
                    expectIsType(id, value, 'string');
                    return /** @type {string} */ (value);
                },

                /**
                 * Returns a formatted localized string where $1 to $9 are replaced by the
                 * second to the tenth argument.
                 * @param {string} id The ID of the string we want.
                 * @param {...(string|number)} var_args The extra values to include in the
                 *     formatted output.
                 * @return {string} The formatted string.
                 */
                getStringF(id, var_args) {
                    const value = this.getString(id);
                    if (!value) {
                        return '';
                    }

                    const args = Array.prototype.slice.call(arguments);
                    args[0] = value;
                    return this.substituteString.apply(this, args);
                },

                /**
                 * Make a string safe for use with with Polymer bindings that are
                 * inner-h-t-m-l (or other innerHTML use).
                 * @param {string} rawString The unsanitized string.
                 * @param {SanitizeInnerHtmlOpts=} opts Optional additional allowed tags and
                 *     attributes.
                 * @return {string}
                 */
                sanitizeInnerHtml(rawString, opts) {
                    opts = opts || {};
                    return parseHtmlSubset('<b>' + rawString + '</b>', opts.tags, opts.attrs)
                        .firstChild.innerHTML;
                },

                /**
                 * Returns a formatted localized string where $1 to $9 are replaced by the
                 * second to the tenth argument. Any standalone $ signs must be escaped as
                 * $$.
                 * @param {string} label The label to substitute through.
                 *     This is not an resource ID.
                 * @param {...(string|number)} var_args The extra values to include in the
                 *     formatted output.
                 * @return {string} The formatted string.
                 */
                substituteString(label, var_args) {
                    const varArgs = arguments;
                    return label.replace(/\$(.|$|\n)/g, function(m) {
                        assert(m.match(/\$[$1-9]/), 'Unescaped $ found in localized string.');
                        return m === '$$' ? '$' : varArgs[m[1]];
                    });
                },

                /**
                 * Returns a formatted string where $1 to $9 are replaced by the second to
                 * tenth argument, split apart into a list of pieces describing how the
                 * substitution was performed. Any standalone $ signs must be escaped as $$.
                 * @param {string} label A localized string to substitute through.
                 *     This is not an resource ID.
                 * @param {...(string|number)} var_args The extra values to include in the
                 *     formatted output.
                 * @return {!Array<!{value: string, arg: (null|string)}>} The formatted
                 *     string pieces.
                 */
                getSubstitutedStringPieces(label, var_args) {
                    const varArgs = arguments;
                    // Split the string by separately matching all occurrences of $1-9 and of
                    // non $1-9 pieces.
                    const pieces = (label.match(/(\$[1-9])|(([^$]|\$([^1-9]|$))+)/g) || []).map(function(p) {
                        // Pieces that are not $1-9 should be returned after replacing $$
                        // with $.
                        if (!p.match(/^\$[1-9]$/)) {
                            assert(
                                (p.match(/\$/g) || []).length % 2 === 0,
                                'Unescaped $ found in localized string.');
                            return {
                                value: p.replace(/\$\$/g, '$'),
                                arg: null
                            };
                        }

                        // Otherwise, return the substitution value.
                        return {
                            value: varArgs[p[1]],
                            arg: p
                        };
                    });

                    return pieces;
                },

                /**
                 * As above, but also makes sure that the value is a boolean.
                 * @param {string} id The key that identifies the desired boolean.
                 * @return {boolean} The corresponding boolean value.
                 */
                getBoolean(id) {
                    const value = this.getValue(id);
                    expectIsType(id, value, 'boolean');
                    return /** @type {boolean} */ (value);
                },

                /**
                 * As above, but also makes sure that the value is an integer.
                 * @param {string} id The key that identifies the desired number.
                 * @return {number} The corresponding number value.
                 */
                getInteger(id) {
                    const value = this.getValue(id);
                    expectIsType(id, value, 'number');
                    expect(value === Math.floor(value), 'Number isn\'t integer: ' + value);
                    return /** @type {number} */ (value);
                },

                /**
                 * Override values in loadTimeData with the values found in |replacements|.
                 * @param {Object} replacements The dictionary object of keys to replace.
                 */
                overrideValues(replacements) {
                    expect(
                        typeof replacements === 'object',
                        'Replacements must be a dictionary object.');
                    for (const key in replacements) {
                        this.data_[key] = replacements[key];
                    }
                }
            };

            /**
             * Checks condition, displays error message if expectation fails.
             * @param {*} condition The condition to check for truthiness.
             * @param {string} message The message to display if the check fails.
             */
            function expect(condition, message) {
                if (!condition) {
                    console.error(
                        'Unexpected condition on ' + document.location.href + ': ' + message);
                }
            }

            /**
             * Checks that the given value has the given type.
             * @param {string} id The id of the value (only used for error message).
             * @param {*} value The value to check the type on.
             * @param {string} type The type we expect |value| to be.
             */
            function expectIsType(id, value, type) {
                expect(
                    typeof value === type, '[' + value + '] (' + id + ') is not a ' + type);
            }

            expect(!loadTimeData, 'should only include this file once');
            loadTimeData = new LoadTimeData;

            // Expose |loadTimeData| directly on |window|. This is only necessary by the
            // auto-generated load_time_data.m.js, since within a JS module the scope is
            // local.
            window.loadTimeData = loadTimeData;
        })();
    </script>
    <script jstcache="0">
        loadTimeData.data = {
            "details": "Détails",
            "errorCode": "DNS_PROBE_POSSIBLE",
            "fontfamily": "'Segoe UI', Tahoma, sans-serif",
            "fontsize": "75%",
            "heading": {
                "hostName": "www.google.com",
                "msg": "Ce site est inaccessible"
            },
            "hideDetails": "Masquer les détails",
            "iconClass": "icon-generic",
            "language": "fr",
            "reloadButton": {
                "msg": "Actualiser",
                "reloadUrl": "https://www.google.com/"
            },
            "searchButtonTitle": "Rechercher",
            "searchCSS": "/*\n * Copyright (C) 2012-2019 Opera Software AS.  All rights reserved.\n *\n * This file is an original work developed by Opera Software AS\n */\n\n:host,\n:root {\n  --search-logo-image: url('data:image/png;base64,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');\n}\n\n.web-search-submit {\n  /* use the white magnifying glass */\n  background: -webkit-image-set(\n    url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAAsUlEQVQYGXXBPUrDAAAG0G8Up27BC4j36CjO4jE8QIci1FFw6eAqri49gU56gw5dXBSsTi1oSPM0lvQH6nvJL11jFUrPDrNNX+PTxAwLp1nTRek4f/TUKkVaxjjJihvcp6XykQ321d7TwiRblOZpKc2yQYG3tDyhlxUPuEvLkYXa0F7iwCNKnaw5U6FWanwbmRpkTWFkau7VrY4XjWF2c27pOru5tHSV3Qw06vzHhYWvHzESrc0VDJJNAAAAAElFTkSuQmCC\") 1x,\n    url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAAyUlEQVQ4y+2UURXDIAxFI2ESKgEJSKiESqiESkFCJSBhEiqhDu4+VlpWCO2B7W/vjxNuTpIXEImExbEQtOAwckd0eHLydFdoz4qmlb6Mfl72+FOyXi/4uDgfXWKYo4T54qNehyQ2HL3nUKOjJ9ymQRcKVicSindpKPiqOrrXtqShbSBFI7eBarAvwv6HcGXZTQNrssreXhLz3fVsfBi3niTAk0fNZ8DFNpS+oejkpOBo9gPc7Szjato//tbYgk8i9XgNLMLIxIR9AacGbwHqxFnfAAAAAElFTkSuQmCC\") 2x) no-repeat 50% 50% #4584EE;\n\n\n  border-radius: 0 2px 2px 0;\n  border-width: 0;\n  color: #fff;\n  text-indent: -1000em; /* content: \"\"; Does not work on buttons */\n  width: 60px;\n}\n\n.web-search-logo {\n  background: -webkit-image-set(\n    url(\"data:image/png;base64,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\") 1x,\n    url(\"data:image/png;base64,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\") 2x) no-repeat 0 2px;\n}\n\n.web-search .suggestion-input-container {\n  -webkit-margin-end: 0;\n}\n\n.web-search-input {\n  border-radius: 0;\n  border-right: none;\n  box-shadow: none;\n}\n\n.web-search-input:focus {\n  border-color: #4584EE;\n}\n",
            "searchURL": "javascript:chrome.search(document.getElementsByName('q')[0].value, \"OperaErrorPage\");",
            "suggestionsDetails": [{
                "body": "Go to Opera > Preferences… > System > Use DNS-over-HTTPS instead of the system’s DNS settings and check your DNS-over-HTTPS provider.",
                "header": "Check your DNS over HTTPS settings"
            }],
            "suggestionsSummaryList": [{
                "summary": "\u003Ca href=\"javascript:diagnoseErrors()\" id=\"diagnose-link\">Exécutez les diagnostics réseau de Windows\u003C/a>"
            }, {
                "summary": "Changing DNS over HTTPS settings"
            }],
            "suggestionsSummaryListHeader": "Voici quelques conseils&nbsp;:",
            "summary": {
                "failedUrl": "https://www.google.com/",
                "hostName": "www.google.com",
                "msg": "L'\u003Cabbr id=\"dnsDefinition\">adresse DNS\u003C/abbr> de \u003Cstrong jscontent=\"hostName\">\u003C/strong> est introuvable. Identification du problème…",
                "productName": "Opera"
            },
            "textdirection": "ltr",
            "title": "www.google.com"
        };
    </script>
    <script jstcache="0">
        // Copyright (c) 2012 The Chromium Authors. All rights reserved.
        // Use of this source code is governed by a BSD-style license that can be
        // found in the LICENSE file.

        // This file serves as a proxy to bring the included js file from /third_party
        // into its correct location under the resources directory tree, whence it is
        // delivered via a chrome://resources URL.  See ../webui_resources.grd.

        // Note: this <include> is not behind a single-line comment because the first
        // line of the file is source code (so the first line would be skipped) instead
        // of a licence header.
        // clang-format off
        (function() {
            function l(a, b, c) {
                return Function.prototype.call.apply(Array.prototype.slice, arguments)
            }

            function m(a, b, c) {
                var e = l(arguments, 2);
                return function() {
                    return b.apply(a, e)
                }
            }

            function n(a, b) {
                var c = new p(b);
                for (c.h = [a]; c.h.length;) {
                    var e = c,
                        d = c.h.shift();
                    e.i(d);
                    for (d = d.firstChild; d; d = d.nextSibling) 1 == d.nodeType && e.h.push(d)
                }
            }

            function p(a) {
                this.i = a
            }

            function q(a) {
                a.style.display = ""
            }

            function r(a) {
                a.style.display = "none"
            };
            var t = /\s*;\s*/;

            function u(a, b) {
                this.l.apply(this, arguments)
            }
            u.prototype.l = function(a, b) {
                this.a || (this.a = {});
                if (b) {
                    var c = this.a,
                        e = b.a;
                    for (d in e) c[d] = e[d]
                } else {
                    var d = this.a;
                    e = v;
                    for (c in e) d[c] = e[c]
                }
                this.a.$this = a;
                this.a.$context = this;
                this.f = "undefined" != typeof a && null != a ? a : "";
                b || (this.a.$top = this.f)
            };
            var v = {
                    $default: null
                },
                w = [];

            function x(a) {
                for (var b in a.a) delete a.a[b];
                a.f = null;
                w.push(a)
            }

            function y(a, b, c) {
                try {
                    return b.call(c, a.a, a.f)
                } catch (e) {
                    return v.$default
                }
            }
            u.prototype.clone = function(a, b, c) {
                if (0 < w.length) {
                    var e = w.pop();
                    u.call(e, a, this);
                    a = e
                } else a = new u(a, this);
                a.a.$index = b;
                a.a.$count = c;
                return a
            };
            var z;
            window.trustedTypes && (z = trustedTypes.createPolicy("jstemplate", {
                createScript: function(a) {
                    return a
                }
            }));
            var A = {};

            function B(a) {
                if (!A[a]) try {
                    var b = "(function(a_, b_) { with (a_) with (b_) return " + a + " })",
                        c = window.trustedTypes ? z.createScript(b) : b;
                    A[a] = window.eval(c)
                } catch (e) {}
                return A[a]
            }

            function E(a) {
                var b = [];
                a = a.split(t);
                for (var c = 0, e = a.length; c < e; ++c) {
                    var d = a[c].indexOf(":");
                    if (!(0 > d)) {
                        var g = a[c].substr(0, d).replace(/^\s+/, "").replace(/\s+$/, "");
                        d = B(a[c].substr(d + 1));
                        b.push(g, d)
                    }
                }
                return b
            };

            function F() {}
            var G = 0,
                H = {
                    0: {}
                },
                I = {},
                J = {},
                K = [];

            function L(a) {
                a.__jstcache || n(a, function(b) {
                    M(b)
                })
            }
            var N = [
                ["jsselect", B],
                ["jsdisplay", B],
                ["jsvalues", E],
                ["jsvars", E],
                ["jseval", function(a) {
                    var b = [];
                    a = a.split(t);
                    for (var c = 0, e = a.length; c < e; ++c)
                        if (a[c]) {
                            var d = B(a[c]);
                            b.push(d)
                        } return b
                }],
                ["transclude", function(a) {
                    return a
                }],
                ["jscontent", B],
                ["jsskip", B]
            ];

            function M(a) {
                if (a.__jstcache) return a.__jstcache;
                var b = a.getAttribute("jstcache");
                if (null != b) return a.__jstcache = H[b];
                b = K.length = 0;
                for (var c = N.length; b < c; ++b) {
                    var e = N[b][0],
                        d = a.getAttribute(e);
                    J[e] = d;
                    null != d && K.push(e + "=" + d)
                }
                if (0 == K.length) return a.setAttribute("jstcache", "0"), a.__jstcache = H[0];
                var g = K.join("&");
                if (b = I[g]) return a.setAttribute("jstcache", b), a.__jstcache = H[b];
                var h = {};
                b = 0;
                for (c = N.length; b < c; ++b) {
                    d = N[b];
                    e = d[0];
                    var f = d[1];
                    d = J[e];
                    null != d && (h[e] = f(d))
                }
                b = "" + ++G;
                a.setAttribute("jstcache",
                    b);
                H[b] = h;
                I[g] = b;
                return a.__jstcache = h
            }

            function P(a, b) {
                a.j.push(b);
                a.o.push(0)
            }

            function Q(a) {
                return a.c.length ? a.c.pop() : []
            }
            F.prototype.g = function(a, b) {
                var c = R(b),
                    e = c.transclude;
                if (e)(c = S(e)) ? (b.parentNode.replaceChild(c, b), e = Q(this), e.push(this.g, a, c), P(this, e)) : b.parentNode.removeChild(b);
                else if (c = c.jsselect) {
                    c = y(a, c, b);
                    var d = b.getAttribute("jsinstance");
                    var g = !1;
                    d && ("*" == d.charAt(0) ? (d = parseInt(d.substr(1), 10), g = !0) : d = parseInt(d, 10));
                    var h = null != c && "object" == typeof c && "number" == typeof c.length;
                    e = h ? c.length : 1;
                    var f = h && 0 == e;
                    if (h)
                        if (f) d ? b.parentNode.removeChild(b) : (b.setAttribute("jsinstance", "*0"), r(b));
                        else if (q(b),
                        null === d || "" === d || g && d < e - 1) {
                        g = Q(this);
                        d = d || 0;
                        for (h = e - 1; d < h; ++d) {
                            var k = b.cloneNode(!0);
                            b.parentNode.insertBefore(k, b);
                            T(k, c, d);
                            f = a.clone(c[d], d, e);
                            g.push(this.b, f, k, x, f, null)
                        }
                        T(b, c, d);
                        f = a.clone(c[d], d, e);
                        g.push(this.b, f, b, x, f, null);
                        P(this, g)
                    } else d < e ? (g = c[d], T(b, c, d), f = a.clone(g, d, e), g = Q(this), g.push(this.b, f, b, x, f, null), P(this, g)) : b.parentNode.removeChild(b);
                    else null == c ? r(b) : (q(b), f = a.clone(c, 0, 1), g = Q(this), g.push(this.b, f, b, x, f, null), P(this, g))
                } else this.b(a, b)
            };
            F.prototype.b = function(a, b) {
                var c = R(b),
                    e = c.jsdisplay;
                if (e) {
                    if (!y(a, e, b)) {
                        r(b);
                        return
                    }
                    q(b)
                }
                if (e = c.jsvars)
                    for (var d = 0, g = e.length; d < g; d += 2) {
                        var h = e[d],
                            f = y(a, e[d + 1], b);
                        a.a[h] = f
                    }
                if (e = c.jsvalues)
                    for (d = 0, g = e.length; d < g; d += 2)
                        if (f = e[d], h = y(a, e[d + 1], b), "$" == f.charAt(0)) a.a[f] = h;
                        else if ("." == f.charAt(0)) {
                    f = f.substr(1).split(".");
                    for (var k = b, O = f.length, C = 0, U = O - 1; C < U; ++C) {
                        var D = f[C];
                        k[D] || (k[D] = {});
                        k = k[D]
                    }
                    k[f[O - 1]] = h
                } else f && ("boolean" == typeof h ? h ? b.setAttribute(f, f) : b.removeAttribute(f) : b.setAttribute(f, "" + h));
                if (e = c.jseval)
                    for (d = 0, g = e.length; d < g; ++d) y(a, e[d], b);
                e = c.jsskip;
                if (!e || !y(a, e, b))
                    if (c = c.jscontent) {
                        if (c = "" + y(a, c, b), b.innerHTML != c) {
                            for (; b.firstChild;) e = b.firstChild, e.parentNode.removeChild(e);
                            b.appendChild(this.m.createTextNode(c))
                        }
                    } else {
                        c = Q(this);
                        for (e = b.firstChild; e; e = e.nextSibling) 1 == e.nodeType && c.push(this.g, a, e);
                        c.length && P(this, c)
                    }
            };

            function R(a) {
                if (a.__jstcache) return a.__jstcache;
                var b = a.getAttribute("jstcache");
                return b ? a.__jstcache = H[b] : M(a)
            }

            function S(a, b) {
                var c = document;
                if (b) {
                    var e = c.getElementById(a);
                    if (!e) {
                        e = b();
                        var d = c.getElementById("jsts");
                        d || (d = c.createElement("div"), d.id = "jsts", r(d), d.style.position = "absolute", c.body.appendChild(d));
                        var g = c.createElement("div");
                        d.appendChild(g);
                        g.innerHTML = e;
                        e = c.getElementById(a)
                    }
                    c = e
                } else c = c.getElementById(a);
                return c ? (L(c), c = c.cloneNode(!0), c.removeAttribute("id"), c) : null
            }

            function T(a, b, c) {
                c == b.length - 1 ? a.setAttribute("jsinstance", "*" + c) : a.setAttribute("jsinstance", "" + c)
            };
            window.jstGetTemplate = S;
            window.JsEvalContext = u;
            window.jstProcess = function(a, b) {
                var c = new F;
                L(b);
                c.m = b ? 9 == b.nodeType ? b : b.ownerDocument || document : document;
                var e = m(c, c.g, a, b),
                    d = c.j = [],
                    g = c.o = [];
                c.c = [];
                e();
                for (var h, f, k; d.length;) h = d[d.length - 1], e = g[g.length - 1], e >= h.length ? (e = c, f = d.pop(), f.length = 0, e.c.push(f), g.pop()) : (f = h[e++], k = h[e++], h = h[e++], g[g.length - 1] = e, f.call(c, k, h))
            };
        })()
    </script>
    <script jstcache="0">
        var tp = document.getElementById('t');
        jstProcess(loadTimeData.createJsEvalContext(), tp);
    </script>
</body>

</html>