using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace ApiCountries.Migrations
{
    public partial class addCountryEntity3 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Countries_continent_continentId",
                table: "Countries");

            migrationBuilder.RenameColumn(
                name: "continentId",
                table: "Countries",
                newName: "ContinentId");

            migrationBuilder.RenameIndex(
                name: "IX_Countries_continentId",
                table: "Countries",
                newName: "IX_Countries_ContinentId");

            migrationBuilder.AddForeignKey(
                name: "FK_Countries_continent_ContinentId",
                table: "Countries",
                column: "ContinentId",
                principalTable: "continent",
                principalColumn: "continent_id",
                onDelete: ReferentialAction.Cascade);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Countries_continent_ContinentId",
                table: "Countries");

            migrationBuilder.RenameColumn(
                name: "ContinentId",
                table: "Countries",
                newName: "continentId");

            migrationBuilder.RenameIndex(
                name: "IX_Countries_ContinentId",
                table: "Countries",
                newName: "IX_Countries_continentId");

            migrationBuilder.AddForeignKey(
                name: "FK_Countries_continent_continentId",
                table: "Countries",
                column: "continentId",
                principalTable: "continent",
                principalColumn: "continent_id",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
