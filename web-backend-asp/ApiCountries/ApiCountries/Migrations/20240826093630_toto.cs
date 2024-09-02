using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace ApiCountries.Migrations
{
    public partial class toto : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Countries_continent_ContinentId",
                table: "Countries");

            migrationBuilder.DropIndex(
                name: "IX_Countries_ContinentId",
                table: "Countries");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateIndex(
                name: "IX_Countries_ContinentId",
                table: "Countries",
                column: "ContinentId");

            migrationBuilder.AddForeignKey(
                name: "FK_Countries_continent_ContinentId",
                table: "Countries",
                column: "ContinentId",
                principalTable: "continent",
                principalColumn: "continent_id",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
