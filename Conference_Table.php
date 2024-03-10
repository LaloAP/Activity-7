use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}

// divisions.php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration
{
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}

// teams.php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityIdToTeamsTable extends Migration
{
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');
        });
    }
}

