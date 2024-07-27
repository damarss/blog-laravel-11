# To learn more about how to use Nix to configure your environment
# see: https://developers.google.com/idx/guides/customize-idx-env
{pkgs}: {
  # Which nixpkgs channel to use.
  channel = "stable-23.11"; # or "unstable"
  # Use https://search.nixos.org/packages to find packages
  packages = [
    pkgs.php82
    pkgs.php82Packages.composer
    pkgs.nodejs_20
    pkgs.neofetch
    pkgs.openssh
    pkgs.sqlite
  ];
  # Sets environment variables in the workspace
  env = {};
  idx = {
    # Search for the extensions you want on https://open-vsx.org/ and use "publisher.id"
    extensions = [
      "bmewburn.vscode-intelephense-client"
      "MehediDracula.php-namespace-resolver"
      "onecentlin.laravel5-snippets"
      "porifa.laravel-intelephense"
      "amiralizadeh9480.laravel-extra-intellisense"
      "codingyu.laravel-goto-view"
      "shufo.vscode-blade-formatter"
      "onecentlin.laravel-blade"
      "bradlc.vscode-tailwindcss"
      "esbenp.prettier-vscode"
      "PKief.material-icon-theme"
      "cweijan.vscode-database-client2"
    ];
    workspace = {
      # Runs when a workspace is first created with this `dev.nix` file
      onCreate = {
        # Example: install JS dependencies from NPM
        # npm-install = "npm install";
        # Open editors for the following files by default, if they exist:
        default.openFiles = [ "README.md" "resources/views/welcome.blade.php" ];
      };
      # To run something each time the workspace is (re)started, use the `onStart` hook
    };
    # Enable previews and customize configuration
    previews = {
      enable = false;
      previews = {
        web = {
          command = ["php" "artisan" "serve" "--port" "$PORT" "--host" "0.0.0.0"];
          manager = "web";
        };
      };
    };
  };
}
