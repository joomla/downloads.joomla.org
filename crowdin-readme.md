# Joomla! Downloads - Crowdin Configuration

This file documents the configuration for localizing the **Joomla! Downloads website** (downloads.joomla.org) using the [Crowdin](https://crowdin.com/) platform.

Crowdin is the official tool used by Joomla! to manage translations. It allows volunteers from around the world to translate the website's interface strings into their native languages.

## How to Contribute to Translations

We welcome contributions from everyone! You do not need to be a developer to help translate.

1. **Create an Account:** Sign up at the [Joomla! Crowdin Workspace](https://joomla.crowdin.com).
2. **Find the Downloads Files:** * Go to the [Joomla! Official Websites](https://joomla.crowdin.com/joomla-official-websites) project on Crowdin.
   * Look for the folder labeled **"Joomla! Downloads"** (containing files like `com_ars.ini`, `page_home.ini`).
3. **Start Translating:** Detailed instructions can be found in the [Joomla! Translation Documentation](https://docs.joomla.org/Joomla_Translation_Program).

## Technical Details (For Developers)

The `crowdin.yml` file in this directory governs the synchronization between this repository and the Crowdin platform via the Crowdin CLI.

* **Project Identifier:** `joomla-official-websites`
* **Base Path:** `www/language`
* **Synchronization Logic:**
    * **Source:** It uploads English (`en-GB`) `.ini` files (e.g., `en-GB.page_home.ini`) to the "Joomla! Downloads" folder on Crowdin.
    * **Translations:** It downloads completed translations into language-specific subdirectories following the pattern: `/%locale%/%locale%.filename.ini`.

### Key Files
* **`crowdin.yml`**: The configuration map defining source and destination paths.

## Useful Links

* **Joomla! Crowdin Workspace:** https://joomla.crowdin.com
* **Crowdin CLI Documentation:** https://crowdin.github.io/crowdin-cli/
