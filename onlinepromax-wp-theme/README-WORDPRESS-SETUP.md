# Online Pro Max — WordPress Theme

This is a custom WordPress theme converted from the Online Pro Max static site.
It keeps the exact same design, layout, animations and styling — just made
dynamic and editable through the WordPress dashboard.

## Fast setup (recommended — takes about 5 minutes total)

### Step 1 — Install the theme

1. Zip the `onlinepromax-wp-theme` folder itself (not its contents — the zip
   should contain one top-level folder called `onlinepromax-wp-theme`).
2. In WordPress: **Appearance → Themes → Add New → Upload Theme** → select the
   zip → **Install** → **Activate**.

### Step 2 — One-click import all pages & blog posts

Instead of manually creating 12+ pages by hand, use the included import file
to create everything automatically — all pages, the right template already
assigned to each one, plus all 6 blog posts with their content, categories,
and featured images.

1. In wp-admin, go to **Tools → Import**.
2. Find **WordPress** in the list and click **Install Now**, then **Run Importer**.
   (If you don't see this option, install the free **WordPress Importer**
   plugin from Plugins → Add New first.)
3. Click **Choose File**, select **`onlinepromax-content-import.xml`**
   (included in this folder), then **Upload file and import**.
4. On the next screen, under "Import Attachments," check
   **"Download and import file attachments"** — this pulls in the blog
   featured images automatically.
5. Click **Submit**. WordPress will create:
   - 13 Pages (Home, About Us, Services, Portfolio, Contact, Careers, FAQ,
     Media & PR, Partners, Join Network, Privacy Policy, Request a Quote, Blog)
     — each with its correct template already assigned
   - 6 Blog posts, fully written, with categories and featured images

### Step 3 — Set your homepage

1. Go to **Settings → Reading**.
2. Set "Your homepage displays" → **A static page**.
3. Set **Homepage** = **Home**.
4. Set **Posts page** = leave blank (the Blog page template handles this instead).
5. Save.

### Step 4 — Done

Visit your site — every page and all 6 blog articles should now be live with
no further manual page-building needed.

---

## Manual setup (alternative, if you prefer not to use the import file)

If you'd rather build pages by hand instead of importing, create one Page
per row below (**Pages → Add New**), set the exact **slug**, and assign the
matching **Template** under Page Attributes in the sidebar:

| Page title       | Slug            | Template            |
|-------------------|------------------|----------------------|
| Home              | (set as homepage) | *(uses front-page.php automatically)* |
| About Us          | `about`          | About Us             |
| Services          | `services`       | Services             |
| Portfolio         | `portfolio`      | Portfolio            |
| Contact           | `contact`        | Contact              |
| Careers           | `careers`        | Careers              |
| FAQ               | `faq`            | FAQ                  |
| Media & PR        | `media-pr`       | Media & PR           |
| Partners          | `partners`       | Partners             |
| Join Network      | `join-network`   | Join Network         |
| Privacy Policy    | `privacy-policy` | Privacy Policy       |
| Request a Quote   | `request-quote`  | Request a Quote      |
| Blog              | `blog`           | Blog                 |

For blog posts, the raw article HTML for each one is in `blog-posts-source/`
if you want to copy/paste content manually instead of importing.

> The exact slugs above matter — the navigation menu, buttons, and footer
> links throughout the theme point to `/about/`, `/services/`, `/blog/` etc.

---

## Navigation menu

The header/footer navigation in this theme is hard-coded (matching the
original design exactly, including the mega-dropdowns), so **you don't need
to build a WordPress menu** — it will work immediately once your page slugs
match the table above (the import file sets these correctly for you).

## Update company info

Site-wide contact details live as constants at the top of `functions.php`:

```php
define( 'OPM_PHONE', '+971 55 259 4585' );
define( 'OPM_EMAIL', 'contact@onlinepromax.com' );
define( 'OPM_WHATSAPP', 'https://wa.me/971552594585' );
```

Update these in one place if the numbers/email ever change.

## Images

Most photography throughout the site is hot-linked from Unsplash for the
purposes of this build/preview. Before going live, replace these with your
own licensed photography or brand photos — either by editing the `src="..."`
URLs directly in each `page-*.php` file, or by re-uploading through the
WordPress Media Library and swapping the URLs. The 6 blog featured images
will already be in your Media Library after import (Step 2 above), so you
can swap those from there directly.

## Notes

- Built for **WordPress 6.0+**, PHP 7.4+.
- No page builder or additional plugins required beyond the standard
  WordPress Importer (used once, for Step 2).
- Contact/quote/careers/join-network forms currently submit via front-end
  JS validation only (no backend handler). To make them actually send email,
  wire them up to a plugin like **WPForms**, **Contact Form 7**, or a custom
  `admin-post.php` handler — or ask your developer to connect them to
  `wp_mail()`.
