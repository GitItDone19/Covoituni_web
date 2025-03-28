# CovoitUni - University Carpooling Platform

CovoitUni is a comprehensive carpooling platform designed specifically for university students. This application allows students to find, offer, and share rides to and from university, as well as to various university events.

## Features

- **User Management**: Registration, authentication, and role-based access (Passenger, Driver, Admin)
- **Ride Sharing**: Create, search, and book rides
- **Event Management**: Create, browse, and join university events
- **Dashboard**: Role-specific dashboards for passengers, drivers, and administrators
- **Responsive Design**: Modern, futuristic interface that works on mobile and desktop

## Design System

The UI follows a futuristic, clean design system with a consistent color palette and components. The design is implemented using a combination of custom CSS and Tailwind CSS.

### Colors

- **Primary**: `#3B82F6` (Blue)
- **Primary Light**: `#93C5FD`
- **Primary Ultra Light**: `#EFF6FF`
- **Text Dark**: `#1A1A1A`
- **Text Light**: `#6B7280`
- **Background**: `#FFFFFF`
- **Background Secondary**: `#F9FAFB`

### Component Classes

#### Layout Components

- `.card`: Base card component with shadows and rounded corners
- `.glass-card`: Frosted glass effect card with backdrop blur
- `.card-grid`: Grid layout for cards (responsive)
- `.hero-section`: Section for hero/banner areas with accent styling
- `.section-title`: Styled heading for section titles

#### Button Components

- `.btn`: Base button class
- `.btn-primary`: Primary action button (blue)
- `.btn-outline`: Outlined version of the button
- `.btn-secondary`: Secondary action button

#### Navigation

- `.navbar`: Main navigation bar
- `.nav-link`: Navigation link style

#### Decorative Elements

- `.feature-icon`: Icon containers for feature highlights
- `.feature-box`: Container for feature descriptions
- `.animate-float`: Subtle floating animation for decorative elements

### Using the Design System

When creating new templates or modifying existing ones, follow these principles:

1. Use the predefined classes for consistent styling
2. Maintain the color palette defined in CSS variables
3. Use Tailwind classes to handle responsiveness and layout
4. Follow the card-based design pattern for content blocks
5. Use SVG icons with the established styling pattern
6. Incorporate subtle animations and glassmorphism effects for the futuristic look

## Technical Stack

- **Backend**: Symfony 6.4
- **Frontend**: Twig, Tailwind CSS, Custom CSS
- **Database**: MySQL

## Installation

1. Clone the repository
2. Install dependencies: `composer install`
3. Configure database connection in `.env`
4. Create database: `php bin/console doctrine:database:create`
5. Run migrations: `php bin/console doctrine:migrations:migrate`
6. Set up roles: Visit `/admin/setup-roles` after logging in as admin
7. Start the server: `symfony server:start`

## Accessing the Application

After installation, you can access the application at `http://localhost:8000`.

Default admin credentials:
- Email: admin@covoituni.com
- Password: admin123

## License

This project is licensed under the MIT License.

## Credits

Developed for university students, by university students.

## Profile Setup Wizard for Google Authentication

A profile setup wizard has been implemented for users who authenticate via Google OAuth. This ensures that all required user information is collected after the first login.

### Features:

1. **Automated Redirection**: New Google-authenticated users are automatically redirected to the setup wizard after their first login.

2. **Required Information Collection**:
   - Username (pre-filled with Google name)
   - Phone number
   - Role selection (Passenger or Driver)

3. **User Flow**:
   - User logs in with Google
   - For new users, minimal profile is created with information from Google
   - User is redirected to setup wizard to complete profile
   - After completion, user sees a welcome screen with their profile details
   - User is then directed to the appropriate dashboard based on selected role

### Implementation Details:

- **OAuthController.php**: Modified to flag new users and redirect them to the setup wizard
- **GoogleAuthenticator.php**: Updated to redirect new users to setup wizard after authentication
- **SetupController.php**: New controller handling the profile setup process
- **Templates**: Added new templates for the setup wizard and welcome page

### Security Considerations:

- New users have no role assigned until they complete the setup wizard
- Role selection happens during setup, empowering users to choose their primary role
- All user input is validated before saving 