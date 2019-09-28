<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'Are you sure you want to delete this user permanently? Anywhere in the application that references this user\'s id will most likely error. Proceed at your own risk. This can not be un-done.',
                'if_confirmed_off' => '(If confirmed is off)',
                'no_deactivated' => 'There are no deactivated users.',
                'no_deleted' => 'There are no deleted users.',
                'restore_user_confirm' => 'Restore this user to its original state?',
            ],
        ],

        'dashboard' => [
            'title' => 'Dashboard',
            'welcome' => 'Welcome',
        ],

        'general' => [
            'all_rights_reserved' => 'All Rights Reserved.',
            'are_you_sure' => 'Are you sure you want to do this?',
            'boilerplate_link' => 'Laravel Boilerplate',
            'continue' => 'Continue',
            'member_since' => 'Member since',
            'minutes' => ' minutes',
            'search_placeholder' => 'Search...',
            'timeout' => 'You were automatically logged out for security reasons since you had no activity in ',

            'see_all' => [
                'messages' => 'See all messages',
                'notifications' => 'View all',
                'tasks' => 'View all tasks',
            ],

            'status' => [
                'online' => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages' => '{0} You don\'t have messages|{1} You have 1 message|[2,Inf] You have :number messages',
                'notifications' => '{0} You don\'t have notifications|{1} You have 1 notification|[2,Inf] You have :number notifications',
                'tasks' => '{0} You don\'t have tasks|{1} You have 1 task|[2,Inf] You have :number tasks',
            ],
        ],

        'search' => [
            'empty' => 'Please enter a search term.',
            'incomplete' => 'You must write your own search logic for this system.',
            'title' => 'Search Results',
            'results' => 'Search Results for :query',
        ],

        'welcome' => 'Welcome to the Dashboard',
    ],

    'emails' => [
        'auth' => [
            'account_confirmed' => 'Your account has been confirmed.',
            'error' => 'Whoops!',
            'greeting' => 'Hello!',
            'regards' => 'Regards,',
            'trouble_clicking_button' => 'If you’re having trouble clicking the ":action_text" button, copy and paste the URL below into your web browser:',
            'thank_you_for_using_app' => 'Thank you for using our application!',

            'password_reset_subject' => 'Reset Password',
            'password_cause_of_email' => 'You are receiving this email because we received a password reset request for your account.',
            'password_if_not_requested' => 'If you did not request a password reset, no further action is required.',
            'reset_password' => 'Click here to reset your password',

            'click_to_confirm' => 'Click here to confirm your account:',
        ],

        'contact' => [
            'email_body_title' => 'You have a new contact form request: Below are the details:',
            'subject' => 'A new :app_name contact form submission!',
        ],
    ],

    'frontend' => [
        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Permission Based - ',
                'role' => 'Role Based - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id' => 'Using Access Helper with Permission ID',
                'permission_name' => 'Using Access Helper with Permission Name',
                'role_id' => 'Using Access Helper with Role ID',
                'role_name' => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => 'You can see this because you have the role of \':role\'!',
            'you_can_see_because_permission' => 'You can see this because you have the permission of \':permission\'!',
        ],

        'general' => [
            'joined' => 'Joined',
        ],

        'user' => [
            'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
            'email_changed_notice' => 'You must confirm your new e-mail address before you can log in again.',
            'profile_updated' => 'Profile successfully updated.',
            'password_updated' => 'Password successfully updated.',
        ],

        'welcome_to' => 'Welcome to :place',
    ],

    "ok" => "Ok",
    "cancel" => "Cancel",
    "error_alert_title" => "Oops...",
    "error_alert_text" => "Something went wrong! Please try again.",
    "token_expired_alert_title" => "Session Expired!",
    "token_expired_alert_text" => "Please log in again to continue.",
    "login" => "Log In",
    "register" => "Register",
    "page_not_found" => "Page Not Found",
    "go_home" => "Go Home",
    "logout" => "Logout",
    "email" => "Email",
    "remember_me" => "Remember Me",
    "password" => "Password",
    "forgot_password" => "Forgot Your Password?",
    "confirm_password" => "Confirm Password",
    "name" => "Name",
    "toggle_navigation" => "Toggle navigation",
    "home" => "Home",
    "you_are_logged_in" => "You are logged in!",
    "reset_password" => "Reset Password",
    "send_password_reset_link" => "Send Password Reset Link",
    "settings" => "Settings",
    "profile" => "Profile",
    "your_info" => "Your Info",
    "info_updated" => "Your info has been updated!",
    "update" => "Update",
    "your_password" => "Your Password",
    "password_updated" => "Your password has been updated!",
    "new_password" => "New Password",
    "login_with" => "Login with",
    "register_with" => "Register with",
    "all_in_category" => "All in :category",
    "hi_user" => "Hi :0",
    "have_an_account" => "Have an account?",
    "by" => "by",
    "your_cart_is_empty" => "Your cart is empty",
    "keep_shopping" => "Keep shopping",
    "email_or_username" => "Email or Username",
    "password_confirmation" => "Confirm Password",
    "username" => "Username",
    "total_revenue" => "Total revenue",
    "total_students" => "Total students",
    "top_student_locations" => "Top student locations",
    "sort_by" => "Sort by",
    "date_created_asc" => "Date created - ASC",
    "date_created_desc" => "Date created - DESC",
    "create_new_course" => "Create new course",
    "overview" => "Overview",
    "revenue_report" => "Revenue report",
    "courses" => "Courses",
    "q_and_a" => "Q & A",
    "reviews" => "Reviews",
    "announcements" => "Announcements",
    "instructor_dashboard" => "Instructor dashboard",
    "free" => "Free",
    "public" => "Public",
    "go_to_course_management" => "Manage course",
    "earned_this_month" => "Earned this month",
    "total_earned" => "Total earned",
    "course_rating" => "Course rating",
    "unanswered_questions" => "Unanswered questions",
    "enrolled_this_month" => "Enrolled this month",
    "published_curriculum_lessons" => "Published curriculum items",
    "total_lessons" => "Total lessons",
    "total_published_lessons" => "Total published lessons",
    "last_x_days" => "Last :days days",
    "all_time" => "All time",
    "sales_performance" => "Sales performance",
    "sales" => "Sales",
    "open" => "Open",
    "closed" => "Closed",
    "total_not_yet_finalized" => "Total not yet finalized",
    "time_period" => "Time period",
    "expected_payment_date" => "Expected payment date",
    "amount" => "Amount",
    "notes" => "Notes",
    "your_promotion" => "Your promotion",
    "organic_sales" => "Organic sales",
    "date" => "Date",
    "customer_name" => "Customer name",
    "course" => "Course",
    "coupon_code" => "Coupon code",
    "price_paid" => "Price paid",
    "your_revenue" => "Your revenue",
    "save" => "Save",
    "enter_response" => "Enter response",
    "delete" => "Delete",
    "edit" => "Edit",
    "respond" => "Respond",
    "average_review" => "Average review",
    "has_no_response" => "Has no response",
    "1_star" => "1 star",
    "stars" => ":number stars",
    "newest_first" => "Newest first",
    "oldest_first" => "Oldest first",
    "no_reviews" => "No reviews",
    "no_questions" => "No questions to show",
    "recency" => "Recency",
    "popularity" => "Popularity",
    "questions_without_responses" => "Questions without responses",
    "question_and_replies_will_be_deleted" => "Question and replies will be deleted",
    "no_answer_marked" => "No answer chosen",
    "mark_as_answer" => "Mark as answer",
    "you_can_change_these_later" => "You can change these later",
    "start_here" => "Start Here",
    "course_title" => "Course title",
    "course_subtitle" => "Course subtitle",
    "category" => "Category",
    "create" => "Create",
    "what_will_students_learn" => "What will students learn in this course?",
    "target_your_students" => "Target your students",
    "course_requirements" => "Are there any requirements or prerequisites?",
    "add_an_answer" => "Add an answer",
    "add_a_requirement" => "Add a requirement",
    "who_are_target_students" => "Who are your target students",
    "add_new_target_student" => "Add new target student",
    "select_price_tier" => "Please select the price tier for your course below and click Save. The list price that students will see in other currencies is calculated using the price tier matrix, based on the tier that it corresponds to.",
    "course_price_tier" => "Course price tier",
    "course_coupons" => "Course coupons",
    "create_new_coupon" => "Create new coupon",
    "course_pricing" => "Course pricing",
    "select" => "Select",
    "curriculum" => "Curriculum",
    "course_landing_page" => "Course landing page",
    "discounted_price" => "Discounted price",
    "final_price" => "Final price",
    "number_of_coupons" => "Number of coupons",
    "deadline" => "Deadline",
    "optional" => "Optional",
    "discount_percentage" => "Discount percentage",
    "link_copied" => "Link copied",
    "copy_to_clipboard" => "Copy to clipboard",
    "choose_image" => "Choose image",
    "processing" => "Processing...",
    "upload" => "Upload",
    "image_description" => "Make your course stand out with a great image from our design team based on your preferences and style. Get your free image. If you create your image, it must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg or .png. no text on the image.",
    "course_image" => "Course image",
    "topics" => "Topic",
    "language" => "Language",
    "all" => "All",
    "beginner" => "Beginner",
    "intermediate" => "Intermediate",
    "advanced" => "Advanced",
    "level" => "Level",
    "course_curriculum" => "Course curriculum",
    "lesson" => "Lesson",
    "lessons" => "Lessons",
    "section" => "Section",
    "sections" => "Sections",
    "lecture" => "Lecture",
    "quiz" => "Quiz",
    "edit_section" => "Edit section",
    "objective" => "Objective",
    "title" => "Title",
    "create_new" => "Create new",
    "new_lesson" => "New lesson",
    "choose_section" => "Choose section",
    "description" => "Description",
    "confirm_delete" => "Are you sure?",
    "section_delete_body" => "This section will be deleted with all its lessons",
    "upload_video" => "Upload video",
    "youtube_video" => "YouTube video",
    "text_content" => "Text content",
    "edit_content" => "Edit content",
    "replace_with_video" => "Replace with video",
    "this_will_delete_current_video" => "The current video will be deleted",
    "text_will_be_deleted" => "The current text content will be deleted",
    "confirm_lesson_delete" => "All contents of this lesson will be deleted",
    "youtube_video_url" => "YouTube video url",
    "duration_in_minutes" => "Duration in minutes",
    "not_sure" => "Not sure?",
    "courses_have_guarantee" => "All our courses come with a 30-day money-back guarantee. Not satisfied, you can request a refund.",
    "join_happy_students" => "Join happy students",
    "join_happy_students_desc" => "Join thousands of students learning new skills around the world on our platform.",
    "course_content" => "Course content",
    "course_description" => "Course description",
    "what_you_will_learn" => "What you will learn",
    "gift_this_course" => "Gift this course",
    "wishlist" => "Wishlist",
    "best_seller" => "Bestseller",
    "rating" => "rating",
    "preview" => "Preview",
    "buy_now" => "Buy now",
    "30_days_guarantee" => "30-day money-back guarantee",
    "certificate_of_completion" => "Certificate of completion",
    "share" => "Share",
    "students_enrolled" => ":number students enrolled",
    "back_to_questions" => "Back to questions",
    "answer" => "Answer",
    "post_answer" => "Post answer",
    "search" => "Search",
    "ask_a_new_question" => "Ask a new question",
    "or" => "Or",
    "sort_by_popularity" => "Sort by popularity",
    "sort_by_recency" => "Sort by recency",
    "see_questions_without_responses" => "See questions without responses",
    "response" => "response",
    "no_announcements_yet" => "No announcements yet",
    "browse_all_announcements" => "Browse all announcements",
    "course_includes" => "Course includes",
    "hours_of_video_content" => ":number hours of video content",
    "article" => "article",
    "recent_activity" => "Recent activity",
    "recent_questions" => "Recent questions",
    "no_questions_yet" => "No questions yet",
    "browse_all_questions" => "Browse all questions",
    "recent_announcements" => "Recent announcements",
    "percent_completed" => ":percent % completed",
    "continue_watching" => "Continue watching",
    "completed" => "Completed",
    "rate_this_course" => "Rate this course",
    "edit_your_rating" => "Edit your rating",
    "post_question" => "Post question",
    "create_question_desc" => "Describe what you are trying to achieve and where you are getting stuck",
    "inbox" => "Inbox",
    "message_with" => "Message with",
    "shopping_cart" => "Shopping cart",
    "checkout" => "Checkout",
    "request_refund" => "Request refund",
    "send_request" => "Send request",
    "refund_reason" => "Refund reason",
    "refund_reason_desc" => "Why are you requesting a refund?",
    "refunds" => "Refunds",
    "purchase_history" => "Purchase history",
    "all_courses" => "All courses",
    "my_courses" => "My courses",
    "privacy_settings" => "Privacy settings",
    "update_profile" => "Update profile",
    "change_password" => "Change password",
    "payout_settings" => "Payout Settings",
    "profile_information" => "Profile information",
    "old_password" => "Old password",
    "first_name" => "First name",
    "last_name" => "Last name",
    "usermane" => "Username",
    "tagling" => "Tagline",
    "biography" => "Biography",
    "facebook" => "Facebook",
    "github" => "Github",
    "linkedin" => "LinedIn",
    "twitter" => "Twitter",
    "youtube" => "YouTube",
    "website" => "Website",
    "submit" => "Submit",
    "send_message" => "Send message",
    "send" => "Send",
    "enter_your_message" => "Enter your message",
    "receipt" => "Receipt",
    "recently_enrolled" => "Recenly enrolled",
    "earliest_enrolled" => "Earliest enrolled",
    "title_asc" => "TItle - ASC",
    "title_desc" => "Title - DESC",
    "filter_by" => "Filter by",
    "all_categories" => "All categories",
    "search_my_courses" => "Search my courses",
    "filters" => "Filters",
    "ratings" => "Ratings",
    "apply" => "Apply",
    "close" => "Close",
    "price_lowest" => "Lowest price",
    "price_highest" => "Highest price",
    "highest_rated" => "Highest rated",
    "minimum_rating" => "Minimum rating",
    "subcategory" => "Subcategory",
    "levels" => "Levels",
    "price" => "Price",
    "paid" => "Paid",
    "review" => "Review",
    "save_review" => "Save review",
    "update_review" => "Update review",
    "enter_review" => "Enter review",
    "review_subject" => "Review subject",
    "delete_review" => "Delete review",
    "type_and_hit_enter" => "Type and hit ENTER...",
    "hour" => "hour",
    "student_feedback" => "Student feedback",
    "student" => "Student",
    "average_rating" => "Average rating",
    "add_to_cart" => "Add to cart",
    "go_to_cart" => "Go to cart",
    "enroll_now" => "Enroll now",
    "submit_for_review" => "Submit for review",
    "why_cant_i_submit" => "Why can't I submit for review?",
    "almost_ready" => "You're almost ready to submit your course. Here are a few more items you need.",
    "submit_error_missing_content" => "On the <a href=':url'>Curriculum page</a>, make sure all your lessons have content.",
    "submit_error_missing_image" => "On the <a href=\":url\">Course landing page</a>, make sure you upload a course image",
    "submit_error_missing_description" => "On the <a href=\":url\">Course landing page</a>, enter a course description",
    "submit_error_missing_target" => "On the <a href=\":url\">Target your students page</a>, make sure you specify who your target students are",
    "submit_error_missing_goals" => "On the <a href=\":url\">Target your students page</a>, make sure you include information on what students will learn from the course",
    "submit_error_missing_requirements" => "On the <a href=\":url\">Target your students page</a>, make sure you specify the basic course requirements / prerequisites. If none, enter NONE.",
    "in_cart" => "in cart",  
    "remove" => "Remove",
    "expires" => "Expires",
    "total" => "Total",
    "apply_coupon_code" => "Apply coupon code",
    "item" => "item",
    "your" => "Your",
    "pay_with_credit_card" => "Pay with credit card",
    "pay_with_razorpay" => "Pay with Razorpay",
    "pay_with_paypal" => "Pay with PayPal",
    "taking_you_to_paypal" => "Taking you to PayPal",
    "card_number" => "Card number",
    "expiry_date" => "Expiry date",
    "cvv" => "CVV",
    "complete_payment" => "Complete payment",
    "created_confirm" => "Your account was successfully created. We have sent you an e-mail to confirm your account.",
    "pending_confirmation" => "Your account is not confirmed. Please click the confirmation link in your e-mail.",
    "resend_confirmation_email" => "Resend confirmation email",
    "resent" => "A new confirmation e-mail has been sent to the address on file.",
    "account_confirmed" => "Your account has been successfully confirmed!",
    "reset_problem" => "There was a problem resetting your password. Please resend the password reset email.",
    "reset_success" => "Password has been reset.",
    "reset_email_problem" => "There was a problem sending the email reset link",
    "not_found" => "Page or Resource Not Found",
    "last_updated" => "Last updated",
    "about_the_instructor" => "About the instructor",
    "instructor_rating" => "Instructor rating",
    "instructor" => "Instructor",
    "requirements" => "Requirements",
    "no_purchases" => "You do not have any purchases",
    "no_refunds" => "You do not have any refunds",
    "no_courses_yet" => "You are not enrolled to any courses yet.",
    "no_announcements" => "No announcements to show",
    "includes" => "Includes",
    "code" => "Code",
    "quantity" => "Quantity",
    "compose" => "Compose",
    "select_courses" => "Select courses",
    "announcement" => "Announcement",
    "created" => "Created",
    "view" => "View",
    "post" => "Post",
    "tagline" => "Tagline",
    "admin_dashboard" => "Admin Dashboard",
    "next" => "Next",
    "previous" => "Previous",
    "back_to_dashboard" => "Back to course dashboard",
    "categories" => "Categories",
    "all_ratings" => "All rating",
    "write_your_response" => "Write your response",
    "total_used" => "Redeemed",
    "account" => "My Account",
    "administration" => "Administration",
    "my_information" => "My Information",
    "messages" => "Messages",
    "total_courses" => "Total Courses",
    "online_courses_in_category" => "Online :category courses",
    "discount_coupons" => "Discount coupons",
    "transactions" => "Transactions",
    "payouts" => "Payouts",
    "users" => "Users",
    "system" => "System",
    "finances" => "Finances",
    "parent" => "Parent",
    "status" => "Status",
    "pending_admin_approval" => "Pending admin approval",
    "details" => "Details",
    "created_at" => "Created",
    "draft" => "Draft",
    "live" => "Live",
    "under_review" => "Under review",
    "author_has_not_submitted" => "The author has not submitted this course for approval yet.",
    "decision" => "Decision",
    "approved" => "Approved",
    "disapproved" => "Disapproved",
    "course_info" => "Course Info",
    "approval" => "Approval",
    "review_comment" => "Review comment",
    "back" => "Back",
    "statistics" => "Statistics",
    "approval_history" => "Approval history",
    "refund_processed_sent_to" => "This refund has already been processed. Refund was sent to <b>:0</b>",
    "refund_processed_details" => "This payment was processed with :0 with payment gateway <b>ID: :1</b>. Click on the button to process this refund.",
    "all_refunds" => "All refunds",
    "pending" => "Pending",
    "processed" => "Processed",
    "user" => "User",
    "processed_at" => "Processed",
    "are_you_sure_yes" => "Are you sure you want to deactivate this user?",
    "are_you_sure_no" => "Are you sure you want to activate this user?",
    "yes" => "Yes",
    "no" => "No",
    "enroll_user_to_course" => "Enroll <b>:0</b> to course",
    "enrolled_at" => "Enrollment date",
    "unenroll" => "Unenroll",
    "confirm_unenrollment" => "Are you sure you want to unenroll this student from this course?",
    "enrollments" => "Course Enrollments",
    "enroll" => "Enroll",
    "subtitle" => "Subtitle",
    "teaching" => "Teaching",
    "conversion_rate" => "Conversion rate",
    "symbol" => "Symbol",
    "symbol_position" => "Symbol position",
    "left" => "Left of value",
    "right" => "Right of value",
    "left_short" => "Left",
    "right_short" => "Right",
    "space_between" => "Space between symbol and value?",
    "space_between_short" => "Space between",
    "space_between_sm" => "Space",
    "add_new_currency" => "Add new currency",
    "no_currencies" => "No currencies added",
    "is_primary" => "Is primary currency",
    "enabled" => "Enabled",
    "formatted" => "Formatted",
    "site_currencies" => "Site currencies",
    "iso_code" => "ISO Code",
    "site_settings" => "Site settings",
    "currency_settings" => "Currency settings",
    "payment_settings" => "Payment settings",
    "mail_settings" => "Mail settings",
    "language_settings" => "Language settings",
    "site_mode" => "Site mode",
    "site_name" => "Site name",
    "site_description" => "Site description",
    "site_keywords" => "Site keywords",
    "site_address" => "Site address",
    "system_email" => "System email",
    "purchase_code" => "Purchase code",
    "envato_username" => "Envato username",
    "author_earnings" => "Author earnings",
    "license_information" => "License Information",
    "organic_sales_percent" => "Organic sales percent",
    "promo_sales_percent" => "Promo sales percent",
    "site_logo" => "Site logo",
    "site_favicon" => "Site favicon",
    "demo" => "Demo",
    "enable_demo_mode" => "Enable Demo Mode",
    "site" => "Site",
    "google_analytics" => "Google analytics",
    "images" => "Images",
    "payment_gateways" => "Payment gateways",
    "paypal_live_secret" => "PayPal Live Secret Key",
    "paypal_sandbox_secret" => "PayPal Sandbox Secret Key",
    "paypal_sandbox_client_id" => "PayPal Sandbox Client ID",
    "paypal_live_client_id" => "PayPal Live Client ID",

    "enable_paypal_payment" => "Enable paypal payment",
    "enable_credit_card" => "Enable credit card payment",
    "credit_card_processor" => "Credit card processor",
    "paypal_settings" => "Paypal settings",
    "paypal_mode" => "PayPal mode",
    "sandbox" => "Sandbox",
    "stripe_settings" => "Stripe settings",
    "stripe_mode" => "Stripe mode",
    "stripe_sandbox_public_key" => "Sandbox Public key",
    "stripe_sandbox_secret_key" => "Sandbox Secret key",
    "stripe_live_public_key" => "Live Public key",
    "stripe_live_secret_key" => "Live Secret key",
    "razorpay_settings" => "RazorPay settings",
    "razorpay_mode" => "RazorPay mode",
    "razorpay_sandbox_public_key" => "Sandbox Public key",
    "razorpay_sandbox_secret_key" => "Sandbox Secret key",
    "razorpay_live_public_key" => "Live Public key",
    "razorpay_live_secret_key" => "Live Secret key",
    "refunded_to" => "Refunded to",
    "purchase_type" => 'Purchase type',
    "purchase_date" => "Purchase date",
    "receipt" => "Receipt",
    "no_search_results" => "No results match the search criteria",
    "admnin_dashboard" => "Admin Dashboard",
    "discount_type" => "Coupon type",
    "type" => "Type",
    "process_refund" => "Process refund",
    "period_id" => "Period ID",
    "period" => "Period",
    "from" => "From",
    "to" => "To",
    "payout_date" => "Expected payout date",
    "purchases" => "Purchases",
    "pending_payouts" => "Pending payouts",
    "close_period" => "Close period",
    "purchase_details" => "Purchase details",
    "you_cannot_close_period" => "You cannot close this period yet. The period can be closed on or after <b>:date</b>",
    "period_can_be_closed" => "This period can be closed now. Once it is closed, all payouts will be calculated and presented to you for processing.",
    "gateway_payment_id" => "Gateway Payment ID",
    "payment_type" => "Payment type",
    "purchased_by" => "Purchased by",
    "author_earning" => "Author earning",
    "author" => "Author",
    "date_processed" => "Date processed",
    "comment" => "Comment",
    "video_settings" => "Video settings",
    "video_upload_location" => "Video upload location",
    "amazon_s3_bucket" => "Amazon S3 Bucket",
    "local_server" => "Local Server",
    "video_max_size_mb" => "Video Max. Size (MB)",
    "video_providers" => "Video providers",
    "upload_only" => "Upload only",
    "youtube_only" => "YouTube only",
    "both" => "Both",
    "site_currency" => "Site currency",
    "mailing_address" => "Mailing address",
    "from_name" => "From name",
    "from_address" => "From email",
    "smtp_encryption" => "SMTP encryption",
    "smtp_password" => "SMTP Password",
    "smtp_username" => "SMTP Username",
    "smtp_port" => "SMTP Port",
    "smtp_host" => "SMTP Host",
    "smtp_encryption" => "SMTP Encryption",
    "ses_region" => "SES Region",
    "ses_secret" => "SES Secret",
    "ses_key" => "SES Key",
    "sendmail_path" => "Mail Path",
    "sparkpost_secret" => "Sparkpost Secret",
    "postmark_token" => "Postmark Token",
    "mailgun_endpoint" => "Mailgun Endpoint",
    "mailgun_secret" => "Mailgun Secret",
    "mailgun_domain" => "Mailgun Domain",
    "mail_driver" => "Mail Driver",
    "mail_provider" => "Mail Provider",
    "course_approval" => "Course Approval",
    "language" => "Language",
    "process_payout" => "Process Payout",
    "fetch_update" => "Fetch Status Update",
    "payout_gateway_status" => "Gateway Status",
    "gateway_payout_id" => "Gateway Payout Batch ID",
    "first" => "First",
    "last" => "Last",
    "filters" => "Filters",
    "records" => "Records",
    "page" => "Page",
    "no_matching_records" => "No matching records",
    "loading" => "Loading",
    "columns" => "Columns",
    "purchase_receipt" => "Purchase Receipt",
    "order_no" => "Order #",
    "sold_to" => "Sold To",
    "ordered" => "Ordered",
    "coupon" => "Coupon",
    "server_error" => "Server Error",
    "unable_to_fetch_updates" => "Unable to fetch updates. Try again later",
    "running_latest_version" => "You are running the latest version",
    "update_now" => "Update Now!",
    "running_wait" => "Running. Wait...",
    "version_available" => "Version <span class=\"badge badge-warning\">:version</span> is available.",
    "created_by" => "Created by",
    "last_updated" => "Last updated",
    "video_processing" => "Video processing",
    "video_processing_failed" => "Video processing failed",
    "enable_video_encoding" => "Enable video encoding?",
    "enable_video_encoding_explanation" => "If enabled, videos will be encoded using FFMpeg. For this to work, please ensure that you have FFMpeg running on your server and that is is exported to PATH",
    "important" => "Important!",
    "redirect_https" => "Redirect to HTTPS",
    "redirect_https_explanation" => "You must have SSL set up on your server for this to work.",
    "site_url" => "Site URL",
    "choose_logo" => "Choose Logo",
    "choose_icon" => "Choose Favicon",
    "choose_homepage_image" => "Choose Homepage Banner Image",
    "s3_url" => 'AWS URL',
    "s3_bucket" => "AWS Bucket",
    "s3_default_region" => "AWS Default Region",
    "s3_secret_access_key" => "AWS Secret Access Key",
    "s3_access_id" => "AWS Access ID",
    "video_hd_dimension" => "Video HD Dimension",
    "video_sd_dimension"=> "Video SD Dimension",
    "queue_connection" => "Queue Connection",
    "queue_sync" => "Sync (Default)",
    "queue_database" => "Database",
    "queue_connection_explanation" => "Queues allow to defer time consuming tasks, such as sending an email, until a later time. Deferring these tasks can speed up web requests to the application.",
    "info" => "Info",
    "queues" => "Queues",
    "license_information" => "License Information",
    "license_information_explanation" => "Please provide your envato Purchase Code and Username here. We use this to continue to provide you with updates to the script and for continuous support.",
    "locale_manager" => "Locale Manager",
    "key" => "Key",
    "value" => "Value",
    "carbon_code" => "Carbon Code",
    "php_code" => "PHP Code",
    "is_rtl" => "Is RTL",
    "is_default" => "Is Default",
    "is_active" => "Is Active",
    "no_languages" => "No Languages",
    "translations" => "Translations",
    "translation_group" => "Translation Group",
    "publish" => "Publish",
    "languages" => "Languages",
    "publishing" => "Publishing...",
    "unpublish" => "Unpublish",
    "unpublishing" => "Unpublishing...",

    "import" => "Import translations",
    "importing" => "Importing...",

    "pages" => "Pages",
    "slug" => "Slug",
    "body" => "Body",
    "paypal_email" => "PayPal Email",
    "payout_explanation" => "Your payments will be processed through PayPal. Please provide your PayPal email else your payouts will not be processed.",
    "students_are_viewing" => "Students are viewing",
    "top_categories" => "Top Categories",
    "edit_profile" => "Edit Profile",
    "public_profile" => "Public Profile",
    "plus_online_courses" => "80,000 online courses",
    "plus_online_courses_sub" => "Explore our library of fresh topics",
    "expert_instruction" => "Expert Instruction",
    "expert_instruction_sub" => "Find the right instructor for you",
    "lifetime_access" => "Lifetime access",
    "lifetime_access_sub" => "Learn on your own time, for life.",
    "learn_on_your_schedule" => "Learn on your schedule",
    "learn_on_your_schedule_sub" => "Study any topic, anytime. Choose from thousands of expert-led courses now.",
    "coupons" => "Coupons"
    
];
